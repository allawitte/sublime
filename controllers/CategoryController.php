<?php

namespace app\controllers;
use app\models\Category;
use app\models\Good;



class CategoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $categories = new Category();
        $categories = $categories->getCategories();
        return $this->render('index', compact('categories'));
    }

    public function actionView($id){
        $catGoods = new Good();

        $category = new Category();
        $category = $category->getCategoryByName($id);
        $catGoods = $catGoods->getGoodsCategories($id);
        return $this->render('view', compact('catGoods', 'category'));
    }

}
