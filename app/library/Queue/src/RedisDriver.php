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
        $this->redis->rpush($queuename, $message);

    }

    public function dequeue($queuename)
    {
        $this->redis->lpop($queuename);

    }

}