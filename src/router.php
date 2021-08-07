<?php

if(file_exists($_SERVER["REQUEST_URI"])) {
    return false;
}


include_once __DIR__."/../public/index.php";