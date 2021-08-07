<?php

use ppeco\router\Router;

Router::route("/", function() {
    return view("main");
});

echo "Damn..";