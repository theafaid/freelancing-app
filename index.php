<?php

session_start();

include('init.php');

require_once("$tplPath/header.php");
require_once("$tplPath/navigation.php");
require_once("$tplPath/sidebar.php");

//if(isset($_SESSION['seller'])) {
//    include('home.php');
//} else {
//    include('user_home.php');
//}

require_once("$tplPath/footer.php");
