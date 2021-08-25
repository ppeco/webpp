<?php

use ppeco\tplpp\Template;

function view(string $name, array $parameters = []): Template {
    return Template::fromFile(__DIR__.'/../resources/templates/'.$name.'.tpl')
        ->addValues($parameters);
}