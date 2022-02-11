<?php
namespace app\modules\site\models;
use me\Record;
/**
 * @property int $id
 * @property string $title
 * @property string $description
 */
class blog extends Record {
    public function rules() {
        return [
            'title'       => 'required|string',
            'description' => ['required', 'string'],
        ];
    }
}