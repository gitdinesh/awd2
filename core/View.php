<?php
/**
 * Base clas of View
 */


 class View {

     /**
      * Load View Based on the Action call
      */
     public function render($view_name){
         $this->content = "view/{$view_name}.php";
         $theme_name = THEME.".php";
         require("view/Layout/$theme_name");
     }
 }