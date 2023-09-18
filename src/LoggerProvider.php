<?php 

namespace Kuvvu\Logger;

use Illuminate\Support\ServiceProvider;

use Kuvvu\Envexample\Commands\EnvExample;

class LoggerProvider extends ServiceProvider {


    public function boot(): void 
    {

        // php artisan vendor:publish --tag=logger

        $this->publishes([
            __DIR__  . '/../config/logger.php' => config_path(path: 'logger.php')
        ], 'logger');

    }


    public function register(): void
    {

    }

}