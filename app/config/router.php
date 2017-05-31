<?php

$router = $di->getRouter();

// Define your routes here
//to submit form
$router->add(
    "/git",
    [
        "controller" => "index",
        "action"     => "git",
    ]
);
$router->handle();
