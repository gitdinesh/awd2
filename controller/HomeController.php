<?php
/**
 * This is Home controller
 */


 class HomeController extends Controller{

     function __construct(){
         parent::__construct();
     }

     function index(){
         $this->view->render("home/index");
     }


     function getAll(){
         $this->view->data =[
             "name"=>"Piusha",
             "address"=>"ewwerwerwerew"

         ];

         $this->view->render("home/items");
         
     }
 }