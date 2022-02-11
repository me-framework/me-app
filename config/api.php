<?php
$url      = include 'url.php';
$database = include 'database.php';
return [
    'charset'         => 'UTF-8',
    'language'        => 'fa-IR',
    'timezone'        => 'Asia/Tehran',
    'moduleNamespace' => 'app\modules',
    'defaultRoute'    => 'site/default/index',
    'basePath'        => dirname(__DIR__),
    'components'      => [
        'url'      => $url,
        'database' => $database,
    ],
];
