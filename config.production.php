<?php

return [
    'environment' => 'prod',
    'baseUrl' => 'https://hootener.github.io/VitaeChamber',
    'production' => true,
    'selected' => function ($page, $section) {
        return str_contains($page->getPath(), $section) ? 'active' : '';
    },
    'build' => [
        'destination' => 'docs',
    ],
];

