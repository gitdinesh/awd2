<?php

/*$fruit_name = $_GET['fruit_name'];
$price      = $_GET['price'];*/



include ('./classes/Connection.php');
include ('./classes/User.php');

$user= new User();
/*$fruit->setName($fruit_name);
$fruit->setPrice($price);



echo "Selected Fruit Name ". $fruit->getName(). " and it's price  ".$fruit->getPrice();*/



echo "<br/>". $user->getAllUsers();
echo $user->find("<br/>"."test");

