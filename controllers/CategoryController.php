<?php

namespace app\controllers;
use app\models\Category;
use app\models\Good;
use yii\data\Pagination;
use Yii;



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

        $total = $catGoods->getGoodsCount($id);
        $paging = $catGoods->getGoodCategoryByPage($id, 4);


        return $this->render('view',[
            'catGoods' => $paging['models'],
            'pages' => $paging['pages'],
            'category' => $category,
            'total'=> $total,
        ]);
    }

    public function actionSearch(){
        $search = htmlspecialchars(Yii::$app->request->get('search'));
        $catGoods = new Good();
        $catGoods = $catGoods->getSearchResults($search);
        return $this->render('search', compact('catGoods', 'search'));
    }

}
