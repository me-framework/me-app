<?php
define('ME_DEBUG', true);
require '../vendor/autoload.php';
require '../vendor/me-framework/me/Me.php';
$config = include '../config/web.php';
(new \me\components\application($config))->run();
