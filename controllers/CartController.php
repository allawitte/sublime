<?php

namespace app\controllers;


use yii\web\Controller;
use app\models\Cart;
use app\models\Good;
use app\models\Order;
use app\models\OrderGood;
use Yii;
use yii\helpers\Url;

class CartController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $session = Yii::$app->session;
        $session->open();
//        $session->remove('cart');
//        $session->remove('cart.totalQuantity');
//        $session->remove('cart.totalPrice');
        return $this->render('index', compact('session'));
    }

    public function actionAdd($id, $quantity)
    {
        $good = new Good();
        $good = $good->getOneGoodById($id);
        $session = Yii::$app->session;
        $session->open();
//        $session->remove('cart');
        $cart = new Cart();
        $cart->addToCart($good, $quantity);
        return $this->renderPartial('index', compact('session'));
    }

    public function actionUpdate($id, $quantity)
    {
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->updateCart($id, $quantity);
        return $this->renderPartial('index', compact('session'));
    }

    public function actionClear()
    {
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->clearCart();
        return $this->renderPartial('index', compact('session'));
        //return $this->render('index', compact('session'));
    }

    public function actionOrder()
    {
        $session = Yii::$app->session;
        $session->open();
        //$session = $_SESSION;
        if (!$session['cart.totalPrice']) {
            return $this->renderPartial('success', compact('session'));
        }
        $order = new Order();
        if ($order->load(Yii::$app->request->post())) {
            $order->date = date('Y-m-d H:i:s');
            $order->sum = $session['cart.totalPrice'];
            if ($order->save()) {
                $session['currentId'] = $order->id;
                $this->saveOrderInfo($session['cart'], $session['currentId']);
                Yii::$app->mailer->compose('order-mail', ['session' => $session, 'order' => $order])
                    ->setFrom(['allaadri.witte@gmail.com' => 'Customer service'])
                    ->setTo([$order->email])
                    ->setSubject('Ваш заказ принят')
                    ->send();
                $session->remove('cart');
                $session->remove('cart.totalQuantity');
                $session->remove('cart.totalPrice');
                return $this->render('success', compact('session'));
            }
        }
        // $this->layout = 'empty';
        return $this->render('order', compact('session', 'order'));


    }

    protected function saveOrderInfo($goods, $orderId)
    {

        foreach ($goods as $id => $item) {
            $orderInfo = new OrderGood();
            $orderInfo->order_id = $orderId;
            $orderInfo->product_id = $id;
            $orderInfo->name = $item['name'];
            $orderInfo->price = $item['price'];
            $orderInfo->quantity = $item['goodQuantity'];
            $orderInfo->sum = $item['goodQuantity'] * $item['price'];
            $orderInfo->save();
        }

    }
}