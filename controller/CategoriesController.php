<?php
/**
 * This is Catagories controller that handle all the catagory level actions
 */
 class CategoriesController extends Controller{
     function __construct(){
         parent::__construct();
     }
     public function index(){

            $catagories = new CatagoriesModel();
            $this->view->catagories= $catagories->getAll();
            $this->view->render("home/index");
     }
 }

 // note pad ekak aran diyan
