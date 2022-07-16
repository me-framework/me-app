<?php
return [
    'class'       => 'me\database\DatabaseManager',
    'default'     => 'main',
    'connections' => [
        'main' => [
            'driver'   => 'mysql',
            'host'     => 'localhost',
            'port'     => '3306',
            'database' => 'me',
            'username' => 'root',
            'password' => 'SecreT1!',
        ],
    //'secound' => [
    //    'driver'   => 'pgsql',
    //    'host'     => 'localhost',
    //    'port'     => '5432',
    //    'database' => 'me',
    //    'username' => 'root',
    //    'password' => '',
    //],
    //'third' => [
    //    'driver'   => 'sqlsrv',
    //    'host'     => 'localhost',
    //    'port'     => '1433',
    //    'database' => 'me',
    //    'username' => 'root',
    //    'password' => '',
    //],
    ]
];
