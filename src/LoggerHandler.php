<?php
namespace Kuvvu\Logger;

use Monolog\Handler\AbstractProcessingHandler;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class LoggerHandler extends AbstractProcessingHandler {

    protected function write(\Monolog\LogRecord $record): void
    {

        if(config()->has('logger.endpoint')){

            Http::withToken(config('logger.token'))
            ->post(config('logger.endpoint'), [
                'data'    => $record,
                'project' => config('logger.project')
            ]);

        } else {

            Log::error("Logger endpoint not set!");

        }

    }

}
