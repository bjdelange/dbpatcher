<?php

namespace LemonWeb\Deployer\Logger;

class DebugLogger implements LoggerInterface
{
    public function __construct($logfile = null, $debug = false)
    {
    }

    public function log($message, $level = LOG_INFO, $extra_newline = false)
    {
        echo $message;
    }

    public function setQuiet($quiet)
    {
    }
}
