<?php
/**
 * Simple Calculator
 */
namespace App\Http\Controllers;


class CalculatorController  extends Controller{


    /**
     * Add function
     */
    public function add($n1,$n2){
        return $n1+$n2;
    }

    public function substract($n1,$n2){
        return $n1-$n2;
    }

    
}