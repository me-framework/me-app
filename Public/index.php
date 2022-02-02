<?php
define('ME_DEBUG', true);

require '../vendor/autoload.php';
require '../vendor/me-framework/me/Me.php';
$config = include '../Config/web.php';
(new \me\components\Application($config))->run();
