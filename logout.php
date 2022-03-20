<?php
include 'core/init.php';
if (!$usrObj->isLoggedIn()) {
    $usrObj->redirect('');
}

$usrObj->logout();
