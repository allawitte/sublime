<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $cat_name
 * @property string $browser_name
 * @property string $description
 * @property string $img
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_name', 'description'], 'required'],
            [['browser_name', 'description'], 'string'],
            [['cat_name'], 'string', 'max' => 45],
            [['img'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getCategories(){
        return Category::find()->asArray()->all();
    }
    public function getCategoryByName($name){
        return Category::find()->where(['cat_name'=>$name])->one();
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_name' => 'Cat Name',
            'browser_name' => 'Browser Name',
            'description' => 'Description',
            'img' => 'Img',
        ];
    }
}
