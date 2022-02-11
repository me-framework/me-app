<?php
namespace app\modules\site\controllers;
use Me;
use app\modules\site\models\blog;
use me\components\Controller;
use Exception;
class blog_controller extends Controller {
    public function index() {
        return blog::find()->all();
    }
    public function details($id) {
        $model = blog::findOne($id);
        if (!$model) {
            throw new Exception('model not found');
        }
        return $model;
    }
    public function create() {
        $model = new blog();
        if (!$model->load(Me::$app->get('request')->get())) {
            throw new Exception('not load');
        }
        if (!$model->save()) {
            $errors = $model->getErrors();
            throw new Exception('validate error');
        }
        return $model;
    }
    public function update($id) {
        $model = blog::findOne($id);
        if (!$model) {
            throw new Exception('model not found');
        }
        if (!$model->load(Me::$app->get('request')->get())) {
            throw new Exception('not load');
        }
        if (!$model->save()) {
            $errors = $model->getErrors();
            throw new Exception('validate error');
        }
        return $model;
    }
    public function delete($id) {
        $model = blog::findOne($id);
        if (!$model) {
            throw new Exception('model not found');
        }
        return $model->delete();
    }
}