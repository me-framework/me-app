<?php
return [
    'class' => 'me\url\UrlManager',
    'rules' => [
        '<module>/<controller>/<action>/<id:\d+>' => '<module>/<controller>/<action>',
        '<module>/<controller>/<action>'          => '<module>/<controller>/<action>',
    ],
];
