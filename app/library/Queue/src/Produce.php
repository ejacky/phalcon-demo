<?php
namespace Sfmg\Queue;

class Produce
{
    private $driver;

    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }


    public  function  send($queuename, $message)
    {
        $this->driver->enqueue($queuename, $message);
    }
}