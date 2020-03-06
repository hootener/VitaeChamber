<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [],
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'active' : '';
    },
];
