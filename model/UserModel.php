<?php

/**
 * This is User model class that communicate with the User table in the databse
 */


 class UserModel{

     function __construct(){
         echo " THis is user Model class ...";
     }

     /**
     * Get Users from the databse
     */
     public function getAll(){
         return [
             [ 
                 "first_name"=>"Piusha",
                 "last_name"=>"Kalyana"
             ]
         ];
    
     }
 }
