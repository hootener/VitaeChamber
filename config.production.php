<?php

use Illuminate\Support\Str;

return [
    'environment' => 'prod',
    'baseUrl' => 'https://hootener.github.io/VitaeChamber',
    'production' => true,
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'active' : '';
    },
    'build' => [
        'destination' => 'docs',
    ],
];

