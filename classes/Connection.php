<?php

/**
 * This class is define all the database connection and 
 * handle all persistant level calls
 * i.e
 * INSERT, DELETE,UPDATE,SELECT
 */


 class Connection{
    

     private $connection = null;
    /**
     * Constructor
     */

     function __construct(){
        echo "Stablish db connection";
        $this->createConnection();
     }
     /**
      * Crete database connection 
      */
     private function createConnection(){
        $this->connection = "DB CONNECTION OBJECT"; 
     }

     /**
      * get Stablished database connection`
      * @param connectionObject connection 
      */
     public function getConnection(){
         return $this->connection;
     }

     /**
      * Execute select query 
      */
     protected function find($query){
         echo "<br/>".$query;
     }
 }