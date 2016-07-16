<?php


/**
 * Aoto Loadings
 */
require ('./core/Controller.php');
require ('./core/View.php');
require ('./core/Bootstrap.php');

require('./model/UserModel.php');

$bootstrap = new Bootstrap();
$bootstrap->init();