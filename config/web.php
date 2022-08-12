<?php
$url      = include 'url.php';
$database = include 'database.php';
return [
    'timezone'        => 'Asia/Tehran',
    'moduleNamespace' => 'app\modules',
    'defaultRoute'    => 'site/default/index',
    'basePath'        => dirname(__DIR__),
    'components'      => [
        'url'      => $url,
        'database' => $database,
    ],
];
