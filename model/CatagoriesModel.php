<?php
/**
 * This is Catagories model class that communicate with the Catagories table in the databse
 */
 class CatagoriesModel extends Model{
     function __construct(){
        // echo " THis is user Model class ...";
        parent::__construct();
     }
     /**
     * Get Users from the databse
     */
     public function getAll(){
         $categories = $this->find("SELECT * FROM categories");
         return $categories;

     }
 }
