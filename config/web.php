<?php
$url      = include 'url.php';
$database = include 'database.php';
return [
    'charset'          => 'UTF-8',
    'language'         => 'fa-IR',
    'timezone'         => 'Asia/Tehran',
    'module_namespace' => 'app\modules',
    'default_route'    => 'site/default/index',
    'base_path'        => dirname(__DIR__),
    'components'       => [
        'url'      => $url,
        'database' => $database,
    ],
];
