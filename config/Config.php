<?php

class Config
{ 
    /**
     * Include/require the config file 
     * @author Giceha Junior <https://github.com/Gicehajunior>
     * 
     * @return config_file configurations
     */
    public function request_config($config) {
        $config_file = require "./config/" . $config . '.php';

        return $config_file;
    }

    /**
     * If debug is set to true, the system should raise exceptions 
     * whereas if, debug is set to false,  exceptions are never shown 
     * to the user.
     * 
     * if error, an exit() is called.
     * 
     * @return exceptions
     */
    public static function debug_backtrace_show($exception = null) {
        
        if (!empty($_ENV['DEBUG'])) {
            if (strtolower($_ENV['DEBUG']) == 'true') {
                return ($exception ?? $exception); 
            }
        }
    }
}