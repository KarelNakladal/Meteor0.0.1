<?php

namespace Meteor;

use Meteor;
/**
 * Initialization of web application
 * 
 * @param
 */
final class App{


    public function __construct(){
        $this->router = new Meteor\Router;
    }

    public function run(){
        //var_dump($this->router->init());
        $this->router->init();
    }
}
