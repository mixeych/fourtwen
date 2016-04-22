<?php

namespace app\models;

use yii\base\Model;

class BlogForm extends Model
{
    public $title;
    public $text;

    public function rules()
    {
        return [
            [['title', 'text'], 'required'],
        ];
    }
}
