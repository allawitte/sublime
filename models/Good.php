<?php

namespace app\models;

use Yii;
use yii\data\Pagination;

/**
 * This is the model class for table "good".
 *
 * @property int $id
 * @property string $category
 * @property string $name
 * @property string $composition
 * @property int $price
 * @property string $descr
 * @property string $img
 * @property string $link_name
 * @property string $added
 */
class Good extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'good';
    }

    public function getGoodsCategories($id){
        $catGoods = Yii::$app->cache->get('category');
        if(!$catGoods){
            //$catGoods =  Good::find()->where(['category'=> $id])->asArray()->all();
            $catGoods =  Good::find()->where(['category'=> $id])->all();
            Yii::$app->cache->set('catGoods', $catGoods, 30);
        }

        return $catGoods;
    }

    public function getGoodsCount($id){
        return count($this->getGoodsCategories($id));
    }

    public function getGoodCategoryByPage($id, $limit){
        $goods = Good::find()->where(['category'=> $id]);
        $countGoods = clone $goods;
        $pages = new Pagination(['totalCount' => $countGoods->count(), 'pageSize' => $limit]);
        $pages->pageSizeParam = false;

        $models = $countGoods->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return (['pages'=>$pages, 'models'=>$models]);
    }

    public function getLastItems(){
        $query = Good::find()->orderBy(['id' => SORT_DESC])->limit(8)->all();
        return $query;
    }

    public function getOneGood($name){
        return Good::find()->where(['link_name'=>$name])->one();
    }
    public function getOneGoodById($id){
        return Good::find()->where(['id'=>$id])->one();
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category', 'name', 'composition', 'price'], 'required'],
            [['price'], 'integer'],
            [['descr', 'link_name'], 'string'],
            [['added'], 'safe'],
            [['category', 'name'], 'string', 'max' => 45],
            [['composition', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'name' => 'Name',
            'composition' => 'Composition',
            'price' => 'Price',
            'descr' => 'Descr',
            'img' => 'Img',
            'link_name' => 'Link Name',
            'added' => 'Added',
        ];
    }
}
