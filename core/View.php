<?php
/**
 * Base clas of View
 */


 class View {

     /**
      * Load View Based on the Action call
      */
     public function render($view_name){
         require("view/{$view_name}.php");
     }
 }