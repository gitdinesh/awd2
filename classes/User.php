<?php
/**
 * Domain specific functions 
 */


 class User extends Connection {

     function __construct(){
         
         parent::__construct();
     }

     function getAllUsers(){
         return $this->find("SELECT * FROM USERS");
     }
 }
