<?php

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [],
    'selected' => function ($page, $section) {
        return str_contains($page->getPath(), $section) ? 'active' : '';
    },
];
