<?php
$database = include 'database.php';
return [
    'charset'         => 'UTF-8',
    'language'        => 'fa-IR',
    'timezone'        => 'Asia/Tehran',
    'moduleNamespace' => 'app\Modules',
    'basePath'        => dirname(__DIR__),
    'components'      => [
        'database'     => $database,
        'routeManager' => [
            'map' => [
                '' => 'site/default/index',
            ]
        ],
    ],
];
