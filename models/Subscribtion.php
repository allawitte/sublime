<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subscribtions".
 *
 * @property int $id
 * @property string $email
 * @property string $token
 */
class Subscribtion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subscribtions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email'], 'string', 'max' => 30],
            [['token'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */

public function getEmailByToken($token){
    return Subscribtion::findOne(['token'=>$token]);
}
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'token' => 'Token',
        ];
    }
}
