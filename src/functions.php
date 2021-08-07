<?php

use ppeco\tplpp\Template;

function view(string $name): Template {
    return Template::fromFile(__DIR__.'/../resources/templates/'.$name.'.tpl');
}