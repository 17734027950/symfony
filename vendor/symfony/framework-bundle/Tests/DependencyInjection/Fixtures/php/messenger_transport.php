<?php

$container->loadFromExtension('framework', [
    'serializer' => true,
    'messenger' => [
        'serializer' => [
            'format' => 'csv',
            'context' => ['enable_max_depth' => true],
        ],
    ],
]);
