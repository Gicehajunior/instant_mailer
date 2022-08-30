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
        $config_file = require __DIR__ . "/" . $config . '.php';

        return $config_file;
    }

    /**
     * If debug is set to true, the system should return exceptions 
     * whereas if, debug is set to false,  exceptions are never shown 
     * to the user. 
     * 
     * @return exceptions
     */
    public static function debug_backtrace_show($exception = null) {
        if (!empty(env('DEBUG'))) {
            if (strtolower(!empty(env('DEBUG')) ? env('DEBUG') : 'false') == 'true') {
                return (($exception) ? $exception : false); 
            }
        }
        else {
            return false;
        }
    }
}