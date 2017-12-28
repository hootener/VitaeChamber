<?php

return [
    'environment' => 'dev',
    'baseUrl' => 'http://localhost:3000',
    'production' => false,
    'collections' => [
        'projects' => [
            'path' => 'project/{filename}',
            'sort' => 'date'
        ]
    ],
];
