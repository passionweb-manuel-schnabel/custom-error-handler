<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Custom Error Handler',
    'description' => 'Adds a custom error handler which redirect to a predefined page.',
    'category' => 'be',
    'author' => 'Manuel Schnabel',
    'author_email' => 'service@passionweb.de',
    'author_company' => 'PassionWeb Manuel Schnabel',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => ['typo3' => '12.4.0-12.4.99'],
        'conflicts' => [],
        'suggests' => [],
    ],
];
