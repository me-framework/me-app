<?php
namespace app\modules\users\models;
use me\Record;
/**
 * @property int $id
 * @property string $title
 */
class groups extends Record {
    public function rules() {
        return [
            'title' => 'required|string:3,255',
        ];
    }
}