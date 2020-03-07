<?php

require "vendor/autoload.php";

use gtashnik\database\Database;

$database = new Database();
$result = $database->theBase();
echo $result;


