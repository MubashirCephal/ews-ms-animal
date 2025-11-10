<?php

namespace App\Console\Commands;

use App\Services\BoilerPlatePingService;
use Illuminate\Console\Command;

class RunRpc extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'grpc:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run the service grpc server to handle incoming grpc requests';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $server = new \Grpc\RpcServer();

        /** @disregard P1013 */
        $server->addHttp2Port(env('GRPC_RUN_HOST').':'.env('GRPC_RUN_PORT'));

        // Note : Add your grpc services here;
        # Sample Ping Grpc Service
        $server->handle(new BoilerPlatePingService());

        echo "Listening on port :".env('GRPC_RUN_PORT'). PHP_EOL;
        $server->run();
    }
}
