<?php

$router = $di->getRouter();

// Define your routes here
$router->add('test/ss', ['controller' => 'test', 'action' => 'index']);

$router->handle();
