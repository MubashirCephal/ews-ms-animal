<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\Isolatable;
use Proto\RegistryService\CreateServiceInRegistryRequest;
use Proto\RegistryService\UpdateServiceInRegistryRequest;
use Proto\RegistryService\RegistryServiceClient;

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
    public function handle(){
        $name = $this->ask('What is the name of the service?');

        /**
         * Check if the service is already registered;
         * if so then; update the service registry
         */

        if (!$name) {
            exit(1);
        }

        if ($serviceId = env('SERVICE_ID')) {
            /** @disregard P1009 */
            $client = new RegistryServiceClient('127.0.0.1:50051', [
                'credentials' => \Grpc\ChannelCredentials::createInsecure(),
                'update_metadata' => function ($metadata) {
                    $metadata['registration_secret'] = [env('JWT_SECRET')];
                    return $metadata;
                }
            ]);

            $service = new UpdateServiceInRegistryRequest();
            $service->setName(str()->ucfirst(str()->camel($name)));
            $service->setId($serviceId);

            list($response, $status) = $client->UpdateService($service)->wait();
        } else {
            /** @disregard P1009 */
            $client = new RegistryServiceClient('127.0.0.1:50051', [
                'credentials' => \Grpc\ChannelCredentials::createInsecure(),
                'update_metadata' => function ($metadata) {
                    $metadata['registration_secret'] = [env('JWT_SECRET')];
                    return $metadata;
                }
            ]);

            
            $service = new CreateServiceInRegistryRequest();
            $service->setName(str()->ucfirst(str()->camel($name)));


            list($response, $status) = $client->CreateService($service)->wait();
        }

        /** @disregard P1011 */
        if ($status->code !== \Grpc\STATUS_OK) {
            $this->info('Service Registration Failed');
        } else {
            $service = $response->getService();

            $this->info('Please add this to your .env file');
            $this->info('SERVICE_ID="' . base64_decode($response->service->key) . '"');
            $this->info('SERVICE_PREFIX="' . $response->service->prefix . '"');
        }
    }
}
