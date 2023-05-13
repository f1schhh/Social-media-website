<?php
session_start();
// All scripts and conf files
require_once('config.inc.php');
require('websiteconf.inc.php');
require('loginfunctions.php');
require('userfunctions.php');

// Website conf class
$wconf = new WebsiteConf();

$login = new Login();

$user = new User();





?>