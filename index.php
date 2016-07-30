<?php


/**
 * Aoto Loadings
 */
require ('./core/Controller.php');
require ('./core/View.php');
require ('./core/Bootstrap.php');
require ('./model/CatagoriesModel.php');


$bootstrap = new Bootstrap();
$bootstrap->init();
