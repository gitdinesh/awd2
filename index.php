<?php


/**
 * Aoto Loadings
 */
require ('./config.php');
require ('./core/Controller.php');
require ('./core/View.php');
require ('./core/Bootstrap.php');
require ('./core/Model.php');
require ('./model/CatagoriesModel.php');


$bootstrap = new Bootstrap();
$bootstrap->init();
