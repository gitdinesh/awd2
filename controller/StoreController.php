<?php 
/**
 * Store controller 
 */

 class StoreController extends Controller{

     function __constructor(){
         parent::__constructor();
     }

     public function index(){
         
            $catagories = new CatagoriesModel();
            $this->view->catagories= $catagories->getAll();


            $products =  new ProductModel();
            $this->view->products= $products->getAll();
            $this->view->render('Store/index');
     }

 }
