<?php
namespace app\modules\users\models;
use me\Record;
/**
 * @property int $id
 * @property int $user_id
 * @property string $mobile
 */
class users_mobiles extends Record {
    public function rules() {
        return [
            'user_id' => 'required|integer|exists:app\modules\users\models\users,id',
            'mobile'  => 'required|string:11,11',
        ];
    }
}