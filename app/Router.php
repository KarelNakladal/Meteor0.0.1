<?php

namespace Meteor;

final class Router{

    public $content;

    public function __construct(){
        $components = scandir(BASEPATH . '/app/Presenter/Templates');
        foreach($components as $component){
            if($file = strstr($component, '.php', true)){
                include_once(BASEPATH . '/app/Presenter/Templates' . $file . '.php');
                echo($component);
            }
        }
        
    }

    public function init(){
        if(isset($_POST['changeDirectoryTo'])){
            $this->changePathTo($_POST['changeDirectoryTo']);
        }else{
            $this->changePathTo();
        }
    }

    public function renderChangeDirectory($value1 = 'Homepage', $value2 = 'default'){
        $changeForm = '<form method="POST"> <input type="submit" name="changeDirectoryTo" value="' . $value1 . '/' . $value2 . '"/> </form>';
        return $changeForm;
    }

    public function changePathTo($template = 'Homepage/default'){
        include_once(BASEPATH . '/app/Presenter/@layout.php');
        $this->content = include_once(BASEPATH . '/app/Presenter/Templates/'. $template . '.php');
    }


}

