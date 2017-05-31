<?php

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Url;


class ControllerBase extends Controller
{
    public function initialize() {
        #code ...
        $this->flash->output();
    }

}
