<?php

use ppeco\router\Router;

include_once __DIR__."/../src/load.php";

Router::route("/api", function() {
    include_once __DIR__."/../main/api.php";
    return "";
});

include_once __DIR__."/../main/site.php";