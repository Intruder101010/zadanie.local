<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 02.06.2018
 * Time: 15:09
 */

namespace app\models;
use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
    public static function tableName()
    {
        return 'post';
    }
}