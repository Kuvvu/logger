<?php

return [

    'endpoint' => env('LOGGER_URL', 'https://log.ops.kuvvu.ch/api/log'),
    'project'  => env('APP_URL', 'http://localhost'),
    'token'    => env('LOGGER_TOKEN', '')

];
