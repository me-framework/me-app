<?php
namespace app\Modules\Site\Controllers;
use Me;
use me\components\Controller;
class DefaultController extends Controller {
    public function Index() {
        return Me::$loadedFile;
    }
}