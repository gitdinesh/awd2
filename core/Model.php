<?php
/**
 * this is Main model class that handle communication with the mysql Databse
 */


 class Model{
     
     private $connection = null;
     function __construct(){

         $this->connection = new mysqli(
             DB_HOST,
             DB_USER_NAME,
             DB_PASSWORD,
             DB_NAME
         );
         
         if(mysqli_connect_error()){
               echo "Oops There is an error while connecting to the Databse"; 

         }
     }

     

     public function find($query){
         if( $query ){
             $result = mysqli_query($this->connection,$query);
             $out_put = [];
             if($result){
                 while( $data_row = mysqli_fetch_assoc($result) ){
                     $out_put[] = $data_row;
                 }
             }
             return $out_put;
         }
     }
 }