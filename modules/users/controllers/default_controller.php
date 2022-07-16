<?php
namespace app\modules\users\controllers;
use Me;
use Exception;
use me\components\controller;
use app\modules\users\models\users;
class default_controller extends controller {
    protected function access() {
        return [
            'index'  => [
                'methods' => ['GET'],
                'roles' => ['asd']
            ],
            'create' => [
                'methods' => ['POST'],
            ],
            'read'   => [
                'methods' => ['GET'],
                'roles' => ['asd']
            ],
            'update' => [
                'methods' => ['POST'],
            ],
            'delete' => [
                'methods' => ['POST'],
            ],
        ];
    }
    public function index() {
        return users::find()->with(['mobiles', 'permissions'])->orderBy(['id' => SORT_DESC])->all();
    }
    public function create() {
        $model = new users();
        if (!$model->load(Me::$app->get('request')->get())) {
            throw new Exception('not load');
        }
        if (!$model->save()) {
            $errors = $model->getErrors();
            throw new Exception(json_encode($errors), 422);
        }
        return $this->read($model->id);
    }
    public function read($id) {
        $model = users::find()->where(['id' => $id])->with(['mobiles', 'permissions'])->one();
        if (!$model) {
            throw new Exception('model not found', 404);
        }
        return $model->toArray();
    }
    public function update($id) {
        $model = users::findOne($id);
        if (!$model) {
            throw new Exception('model not found', 404);
        }
        if (!$model->load(Me::$app->get('request')->get())) {
            throw new Exception('not load');
        }
        if (!$model->save()) {
            $errors = $model->getErrors();
            throw new Exception(json_encode($errors), 422);
        }
        return $this->read($model->id);
    }
    public function delete($id) {
        $model = users::findOne($id);
        if (!$model) {
            throw new Exception('model not found', 404);
        }
        $deleted = $model->delete();
        return $deleted ? [] : [];
    }
}