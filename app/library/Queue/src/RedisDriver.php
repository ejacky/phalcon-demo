<?php
namespace Sfmg\Queue;

class RedisDriver implements Driver
{
    private $redis;
    public function __construct($redis)
    {
        if (is_null($this->redis)) {
            $this->redis = $redis;
        }
    }

    public function enqueue($queuename, $message)
    {
        // TODO: Implement enqueue() method.
    }

    public function dequeue($queuename)
    {
        // TODO: Implement dequeue() method.
    }

}