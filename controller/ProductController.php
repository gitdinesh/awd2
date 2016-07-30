<?php
/**
 * This is Catagories controller that handle all the catagory level actions
 */
 class ProducController extends Controller{
     function __construct(){
         parent::__construct();
     }
     public function index(){

            $products = new ProductModel();
            $this->view->$products= $products->getAll();
            $this->view->render("home/index");
     }
 }

 // note pad ekak aran diyan
