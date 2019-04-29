<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $date
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property int $sum
 * @property string $status
 * @property int $subscribe
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'name', 'email', 'phone', 'address', 'sum'], 'required'],
            [['date'], 'safe'],
            [['sum', 'subscribe'], 'integer'],
            [['status'], 'string'],
            [['name', 'email', 'phone', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'address' => 'Address',
            'sum' => 'Sum',
            'status' => 'Status',
            'subscribe' => 'Subscribe',
        ];
    }
}
