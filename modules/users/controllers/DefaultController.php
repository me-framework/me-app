<?php
namespace app\modules\users\controllers;
use Me;
use me\exceptions\Exception;
use me\exceptions\HttpNotFound;
use me\exceptions\ValidationError;
use me\components\Controller;
use app\modules\users\models\users;
class DefaultController extends Controller {
    protected function access() {
        return [
            'index'  => [
                'methods' => ['GET'],
                'roles'   => ['asd']
            ],
            'create' => [
                //'methods' => ['POST'],
            ],
            'read'   => [
                'methods' => ['GET'],
                'roles'   => ['asd']
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
        return users::find()->with(['mobiles2', 'mobiles', 'permissions'])->orderBy(['id' => SORT_DESC])->all();
    }
    public function create() {
        $model = new users();
        if (!$model->load(Me::$app->getRequest()->get())) {
            throw new Exception('not load');
        }
        if (!$model->save()) {
            throw new ValidationError($model->getErrors());
        }
        return $this->read($model->id);
    }
    public function read($id) {
        $model = users::find()->where(['id' => $id])->with(['mobiles2', 'mobiles', 'permissions'])->one();
        if (!$model) {
            throw new HttpNotFound('model not found');
        }
        return $model;
    }
    public function update($id) {
        $model = users::findOne($id);
        if (!$model) {
            throw new HttpNotFound('model not found');
        }
        if (!$model->load(Me::$app->getRequest()->get())) {
            throw new Exception('not load');
        }
        if (!$model->save()) {
            throw new ValidationError($model->getErrors());
        }
        return $this->read($model->id);
    }
    public function delete($id) {
        $model = users::findOne($id);
        if (!$model) {
            throw new HttpNotFound('model not found');
        }
        $model->delete();
        return [];
    }
}