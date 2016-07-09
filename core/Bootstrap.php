<?php

/**
 * This is Bootstrap layer in on top of MVC
 */

class Bootstrap{

    function init(){
        $url = $_GET['url'];
        $url =  rtrim($url,"/");
        $url = explode("/",$url);



        //HANDLE DEFAULT ROOT PAGE
        if( empty($url[0])){
            $this->invokeDefualtPage();
            return false;
        }
       

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
        


        if(isset($url[1])){
            $controller->{$url[1]}();
        }else {
            $controller->index();
        }

    }

    /**
     * Invoke default home path when route load root path`
     * http:// abc.com
     */
    private function invokeDefualtPage(){
            require("controller/HomeController.php");
            $controller = new HomeController();
            $controller->index();
    }
}
