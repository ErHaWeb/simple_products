<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Simple Products',
    'description' => 'This extension demonstrates the standard output of the Extension Builder v12.0.0-beta.2 by managing simple product data',
    'category' => 'plugin',
    'author' => 'Eric Harrer',
    'author_email' => 'info@eric-harrer.de',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
