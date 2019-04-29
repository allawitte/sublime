<?php

namespace app\controllers;

use app\models\Good;

class GoodController extends \yii\web\Controller
{
    public function actionIndex($name)
    {
        $good = new Good();
        $good = $good->getOneGood($name);
        $related = $good->getRelatedGoods($name, $good['category']);
        return $this->render('index', compact('good', 'name', 'related'));
    }

}
