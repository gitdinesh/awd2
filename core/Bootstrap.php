<?php

/**
 * This is Bootstrap layer in on top of MVC
 */

class Bootstrap{

    function init(){
        $url = $_GET['url'];
        $url =  rtrim($url,"/");
        $url = explode("/",$url);


        /**
        * Controller will be in first argument in the URL
        * Load Controller
        */
        //CHECK FILE IS EXIST IN THE CONTROLLER
        $file_name  = "controller/{$url[0]}Controller.php";
        //CHEKC FILE IS EXIST
        if( file_exists($file_name) ){
                require($file_name);
        }else{
            echo "404 ERROR";
            exit;
        }

        $class_name = $url[0]."Controller";
        $controller = new $class_name;
        $controller->index();


        if(isset($url[1])){
            $controller->{$url[1]}();
        }

    }
}
