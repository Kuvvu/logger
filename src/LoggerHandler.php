<?php 
namespace Kuvvu\Logger;

use Monolog\Handler\AbstractProcessingHandler;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redis;

class LoggerHandler extends AbstractProcessingHandler {

    protected function write(\Monolog\LogRecord $record): void
    {

        Http::withToken(env('LOGGER_TOKEN'))
        ->post(config('logger.endpoint', env('APP_URL')), [
            'data'    => $record,
            'project' => config('logger.project', 'https://dev.kuvvu.ch/api/log') 
        ]);

    }

}
