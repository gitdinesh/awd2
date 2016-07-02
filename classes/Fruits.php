<?php

/**
 * Fruits Class contain main functionality of the fruits
 */
class Fruits {


    /**
     * Declaring Member variable
     * with private scope
     */
    private $name ="";
    private $price = 0;
    /**
    * Constructor
    */
    function __construct(){
        echo "This is Constructor";
    }

    /**
     * Set name
     * @param string  $name   expecting fruit name
       */ 
    public function setName($name){
        $this->name = $name;
    }

    /**
     * Set integer price
     * @param integer $price set fruit price
     */ 
    public function setPrice($price){
        $this->price = $price;
    }

    /**
     * get Name
     * @return string name 
     */
    public function getName(){
        return $this->name;
    }

    /**
     * get price
     * @return integer $price
     */
    public function getPrice(){
        return $this->price;
    }

}
