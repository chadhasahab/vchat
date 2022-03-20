<?php
session_start();

require 'classes/DB.php';
require 'classes/User.php';

$usrObj = new \MyApp\User;

define('BASE_URL', 'http://localhost/vchat/');
