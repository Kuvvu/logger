<?php 
namespace Kuvvu\Logger;

use Monolog\Handler\AbstractProcessingHandler;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redis;

class LoggerHandler extends AbstractProcessingHandler {

    protected function write(\Monolog\LogRecord $record): void
    {

        Http::withToken(env('LOGGER_TOKEN'))
        ->post(config('logger.endpoint', 'https://log.kuvvu.ch/api/log'), [
            'data'    => $record,
            'project' => config('logger.project', env('APP_URL')) 
        ]);

    }

}
