<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class GenerateGrpcBoilerForModel extends Command
{

    public $model;
    public $modelPlural;
    public $modelVar;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'grpc:boiler';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate boiler plate code for models';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->model = ucfirst($this->ask('Enter the name of the model'));
        $this->modelPlural = str()->plural($this->model);

        if($this->modelPlural == $this->model){
            $this->modelPlural = $this->model.'ById';
        }

        $this->info('Generating Stubs, Please wait.');

        # Create all the boilerfiles;

        # Avoid an interface bug
        if(!is_dir(app_path('Interfaces'))){
            $this->info('Interfaces Folder Created');
            Artisan::call('make:interface Interfaces/'.$this->model.'ServiceInterface');
        }else{
            Artisan::call('make:interface '.$this->model.'ServiceInterface');
        }
        Artisan::call('make:class GrpcServices/Grpc'.$this->model.'Service');
        Artisan::call('make:class Services/'.$this->model.'Service');
        Artisan::call('make:class Validators/'.$this->model.'/CreateServiceValidation');
        Artisan::call('make:class Validators/'.$this->model.'/DeleteServiceValidation');
        Artisan::call('make:class Validators/'.$this->model.'/UpdateServiceValidation');
        Artisan::call('make:class Validators/'.$this->model.'/GetServiceValidation');


        $this->process('grpc.service.stub', 'GrpcServices/Grpc'.$this->model.'Service');
        $this->process('interface.stub', 'Interfaces/'.$this->model.'ServiceInterface');
        $this->process('service.stub', 'Services/'.$this->model.'Service');
        $this->process('create.validator.stub', 'Validators/'.$this->model.'/CreateServiceValidation');
        $this->process('delete.validator.stub', 'Validators/'.$this->model.'/DeleteServiceValidation');
        $this->process('update.validator.stub', 'Validators/'.$this->model.'/UpdateServiceValidation');
        $this->process('get.validator.stub', 'Validators/'.$this->model.'/GetServiceValidation');



        $this->info('All Files Generated Successfully');
        $this->info('Please add the line to RunRpc.php');
        $this->info('$server->handle(new Grpc'.$this->model.'Service());');
    }




    /**
     * Example :
     * $stub 'grpc.service.stub'
     * $file 'GrpcServices/Grpc\'.$model.\'Service.php'
     */
    protected function process($stub, $file) {

        $content = file_get_contents(base_path('/stubs/'.$stub));
        if($content){
            // Process the Content;
            $content = preg_replace('/\{\{model\}\}/i', $this->model, $content);
            $content = preg_replace('/\{\{modelPlural\}\}/i', $this->modelPlural, $content);
            $content = preg_replace('/\{\{modelVar\}\}/i', str()->lower($this->model), $content);

            file_put_contents(app_path($file.'.php'), $content);
            $this->info('File Generated : '.$file.'.php');
        }
    }
}
