<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\Isolatable;
use Proto\RbacService\CreateServiceInRegistryRequest;
use Proto\RbacService\RbacServiceClient;
use Proto\RbacService\UpdateServiceInRegistryRequest;

class RegisterService extends Command implements Isolatable
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'iam:add-service';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Register the service in registry for the IAM to identify the service and its claims';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('What is the name of the service?');

        /**
         * Check if the service is already registered;
         * if so then; update the service registry
         */
         
        if(!$name){
            exit(1);
        }

        if($serviceId = env('SERVICE_ID')){
            /** @disregard P1009 */
            $client = new RbacServiceClient('127.0.0.1:50051', [
                'credentials' => \Grpc\ChannelCredentials::createInsecure(),
            ]);

            $service = new UpdateServiceInRegistryRequest();
            $service->setName(str()->camel($name));
            $service->setServiceId($serviceId);

            list($response, $status) = $client->UpdateService($service)->wait();
        }else{
            /** @disregard P1009 */
            $client = new RbacServiceClient('127.0.0.1:50051', [
                'credentials' => \Grpc\ChannelCredentials::createInsecure(),
            ]);

            $service = new CreateServiceInRegistryRequest();
            $service->setName(str()->camel($name));

            list($response, $status) = $client->CreateService($service)->wait();
        }

        /** @disregard P1011 */
        if ($status->code !== \Grpc\STATUS_OK) {
            $this->info('Service Registration Failed');
        }

        $this->info('Please add this to your .env file');
        $this->info('SERVICE_ID="'.base64_decode($response->service_id).'"');
        $this->info('SERVICE_PREFIX="'.str()->slug(str()->camel($name)).'"');
    }
}
