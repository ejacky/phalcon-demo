<?php
namespace Sfmg\Queue;

interface Driver
{
    public function enqueue($queuename, $message);

    public function dequeue($queuename);
}