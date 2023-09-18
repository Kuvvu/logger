<?php 

namespace Kuvvu\Logger;

use Monolog\Logger as _Logger;

class Logger {

    public function __invoke(array $config): _Logger 
    {
        return new _Logger('logger', [
            new LoggerHandler()
        ]);
    }

}
