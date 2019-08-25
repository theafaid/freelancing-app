<?php

include_once('db.php');

if(isset($_GET['lang']) && $_GET['lang'] == 'ar') {
    include_once 'includes/languages/ar.php';
} else{
    include_once 'includes/languages/en.php';
}

$tplPath  = 'includes/templates';
$themPath = 'theme';

