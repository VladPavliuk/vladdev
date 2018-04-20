<?php

return [
    'GET:' => 'main/home',
    'GET:/' => 'main/home',

    'GET:projects' => 'main/projects',
    'GET:about' => 'main/about',

    'GET:project/([0-9]+)' => 'main/project/$1',
];