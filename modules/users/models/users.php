<?php
namespace app\modules\users\models;
use me\Record;
/**
 * @property int $id
 * @property int $group_id
 * @property string $fullname
 * @property string $username
 * @property string $password
 */
class users extends Record {
    protected function rules() {
        return [
            'group_id'    => 'required|integer|exists:app\modules\users\models\groups,id',
            'fullname'    => 'required|string:3,255',
            'username'    => 'required|string:3,255',
            'password'    => 'required|string:3,255',
            'mobiles2'    => 'many:app\modules\users\models\users_mobiles,id,user_id,id',
            'mobiles'     => 'sync:app\modules\users\models\users_mobiles,id,user_id,mobile',
            'permissions' => 'sync:app\modules\users\models\users_permissions,id,user_id,permission_id',
        ];
    }
}