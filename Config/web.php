<?php
$database = include 'database.php';
return [
    'charset'         => 'UTF-8',
    'language'        => 'fa-IR',
    'timezone'        => 'Asia/Tehran',
    'moduleNamespace' => 'app\Modules',
    'defaultRoute'    => 'site/default/index',
    'basePath'        => dirname(__DIR__),
    'components'      => [
        'database'     => $database,
        'routeManager' => [
            'rules' => [
                '<module>/<controller>/<id:\d+>' => '<module>/<controller>/view',
                '<module>/<controller>/<action>' => '<module>/<controller>/<action>',
            ]
        ],
    ],
];
