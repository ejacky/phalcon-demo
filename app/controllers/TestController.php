<?php

class TestController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $user = (array)User::findFirst(['name' => 'admin']);
        $user       = (array)$user;
        var_dump($user['name']);

    }

    public function myAction()
    {
        echo "this is my";

    }



}

