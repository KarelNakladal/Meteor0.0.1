<?php 

class AutoloadFinal{

    public static function load(){
        $components = scandir(BASEPATH . '/Meteor/src/Components');
        foreach($components as $component){
            if($file = strstr($component, '.php', true)){
                include_once(BASEPATH . '/Meteor/src/Components/' . $file . '.php');
                //echo $file . "\n";
            }
        }
        
        include_once(BASEPATH . '/app/Router.php');
        //var_dump(__DIR__);
    }

}