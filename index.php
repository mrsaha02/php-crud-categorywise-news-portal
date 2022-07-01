<?php

require_once './vendor/autoload.php';

use App\classes\Login;

$home = new Login();
$home->index();
