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
    public $modelVarSnake;
    public $modelVarPlural;
    public $modelVarPluralSnake;

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
        $this->modelVar = str()->lcfirst($this->model);
        $this->modelVarSnake = str()->snake($this->model);
        
        $this->modelPlural = str()->plural($this->model);


        if($this->modelPlural == $this->model){
            $this->modelPlural = $this->model.'ById';
        }

        $this->modelVarPlural = lcfirst($this->modelPlural);
        $this->modelVarPluralSnake = str()->snake($this->modelVarPlural);

        
        $this->info('=================================');
        $this->info('Generating Stubs, Please wait.');
        $this->info('=================================');

        # Create all the boilerfiles;

        # Avoid an interface bug
        if(!is_dir(app_path('Interfaces'))){
            $this->info('Interfaces Folder Created');
            Artisan::call('make:interface Interfaces/'.$this->model.'ServiceInterface');
        }else{
            Artisan::call('make:interface '.$this->model.'ServiceInterface');
        }
        Artisan::call('make:resource '.$this->model.'Resource');
        Artisan::call('make:class GrpcServices/Grpc'.$this->model.'Service');
        Artisan::call('make:class Services/'.$this->model.'Service');
        Artisan::call('make:class Validators/'.$this->model.'/CreateRequestValidation');
        Artisan::call('make:class Validators/'.$this->model.'/DeleteRequestValidation');
        Artisan::call('make:class Validators/'.$this->model.'/UpdateRequestValidation');
        Artisan::call('make:class Validators/'.$this->model.'/GetRequestValidation');


        $this->process('grpc.service.stub', 'GrpcServices/Grpc'.$this->model.'Service');
        $this->process('resource.stub', 'Http/Resources/'.$this->model.'Resource');
        $this->process('interface.stub', 'Interfaces/'.$this->model.'ServiceInterface');
        $this->process('service.stub', 'Services/'.$this->model.'Service');
        $this->process('create.validator.stub', 'Validators/'.$this->model.'/CreateRequestValidation');
        $this->process('delete.validator.stub', 'Validators/'.$this->model.'/DeleteRequestValidation');
        $this->process('update.validator.stub', 'Validators/'.$this->model.'/UpdateRequestValidation');
        $this->process('get.validator.stub', 'Validators/'.$this->model.'/GetRequestValidation');


        $this->info('=================================');
        $this->info('All Files Generated Successfully');
        $this->info('=================================');

        $this->info('=================================');
        $this->info('=================================');
        $this->info('Please add the line to RunRpc.php');
        $this->info('$server->handle(new Grpc'.$this->model.'Service());');
        $this->info('=================================');
        $this->info('=================================');
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
            $content = preg_replace('/\{\{modelVar\}\}/i', $this->modelVar, $content);
            $content = preg_replace('/\{\{modelVarPlural\}\}/i', $this->modelVarPlural, $content);
            $content = preg_replace('/\{\{modelVarPluralSnake\}\}/i', $this->modelVarPluralSnake, $content);
            $content = preg_replace('/\{\{modelVarSnake\}\}/i', $this->modelVarSnake, $content);

            file_put_contents(app_path($file.'.php'), $content);

            $this->info('xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
            $this->info('File Generated : '.$file.'.php');
            $this->info('xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');

        }
    }
}

