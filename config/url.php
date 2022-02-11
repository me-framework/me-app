<?php
return [
    'class' => 'me\url\UrlManager',
    'rules' => [
        '<module>/<controller>/<id:\d+>' => '<module>/<controller>/view',
        '<module>/<controller>/<action>' => '<module>/<controller>/<action>',
    ],
];
