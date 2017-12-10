<?php

$db= mysqli_connect('localhost','root','','ecom244');
if (mysqli_connect_errno()) {
 echo'Database connection failed with following errors: ' . mysqli_connect_error();
 die();

}

//define ('BASEURL','/ecomdva/');
require_once $_SERVER['DOCUMENT_ROOT']. '/ecomdva/config.php';
require_once BASEURL.'helpers/helpers.php';
