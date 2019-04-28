<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/27/2019
 * Time: 1:51 PM
 */

namespace app\models;

use yii\db\ActiveRecord;

class Cart
{
    public function addToCart($good, $quantity)
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        if ($quantity > 0) {
            $_SESSION['cart'][$good->id] = [
                'name' => $good['name'],
                'goodQuantity' => $quantity,
                'price' => $good['price'],
                'img' => $good['img'],
            ];
            $_SESSION['cart.totalQuantity'] = 0;
            $_SESSION['cart.totalPrice'] = 0;
            foreach ($_SESSION['cart'] as $item){
                $_SESSION['cart.totalQuantity'] += $item[goodQuantity];
                $_SESSION['cart.totalPrice'] += $item[goodQuantity] * $item['price'];

            }

//            $_SESSION['cart.totalQuantity'] = isset($_SESSION['cart.totalQuantity']) ? $_SESSION['cart.totalQuantity'] += $quantity : $_SESSION['cart.totalQuantity'] = $quantity;
//            $_SESSION['cart.totalPrice'] = isset($_SESSION['cart.totalPrice']) ? $_SESSION['cart.totalPrice'] += $good['price'] * $quantity : $good['price'] * $quantity;

        } else {
            $this->updateCart($good->id, 0);
        }
    }

    public function updateCart($id, $quantity)
    {
        $quantity = $_SESSION['cart'][$id]['goodQuantity'];
        $price = $_SESSION['cart'][$id]['price'] * $quantity;

        $_SESSION['cart.totalPrice'] -= $price;
        $_SESSION['cart.totalQuantity'] -= $quantity;
        unset($_SESSION['cart'][$id]);
        if (count($_SESSION['cart']) == 0) {
            unset($_SESSION['cart']);
        }

    }

    public function clearCart(){
        unset($_SESSION['cart']);
        unset($_SESSION['cart.totalPrice']);
        unset($_SESSION['cart.totalQuantity']);
    }

}