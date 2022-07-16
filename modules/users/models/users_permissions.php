<?php
namespace app\modules\users\models;
use me\Record;
/**
 * @property int $id
 * @property int $user_id
 * @property int $permission_id
 */
class users_permissions extends Record {
    public function rules() {
        return [
            'user_id'       => 'required|integer|exists:app\modules\users\models\users,id',
            'permission_id' => 'required|integer|exists:app\modules\users\models\permissions,id',
        ];
    }
}