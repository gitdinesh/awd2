<?php

/**
 * This is base Controller class 
 */


 class Controller {

     var $view = null;
     function __construct(){
         $this->view = new View();
     }
 }