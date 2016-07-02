<?php

$fruit_name = $_GET['fruit_name'];
$price      = $_GET['price'];



include ('./classes/Fruits.php');


$fruit = new Fruits();
$fruit->setName($fruit_name);
$fruit->setPrice($price);



echo "Selected Fruit Name ". $fruit->getName(). " and it's price  ".$fruit->getPrice();