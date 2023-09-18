<?php

return [

    /* Create a copy/backup of current env.example at start */

    'endpoint' => env('KUVVU_LOG_URL', 'https://dev.kuvvu.ch/api/log'),
    'project'  => env('APP_URL')
  
];
