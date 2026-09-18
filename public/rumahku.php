<?php


require_once '../app/Site/HomePage.php';
require_once '../app/Site/Admin/HomePage.php';

$hp = new \App\Site\Guest\HomePage();
$hp->tampil();
