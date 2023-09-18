<?php 

namespace Kuvvu\Logger;

use Monolog\Logger as _Logger;

class Logger {

    public function __invoke(array $config): Logger 
    {
        return new _Logger('logger', [
            new LoggerHandler()
        ]);
    }

}