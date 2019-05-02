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
            if(!isset($_SESSION['cart'][$good->id]['goodQuantity'])){
                $_SESSION['cart'][$good->id]['goodQuantity'] = 0;
            }
            $_SESSION['cart'][$good->id] = [
                'name' => $good['name'],
                'goodQuantity' => $_SESSION['cart'][$good->id]['goodQuantity']+$quantity,
                'price' => $good['price'],
                'img' => $good['img'],
            ];
            $_SESSION['cart.totalQuantity'] = 0;
            $_SESSION['cart.totalPrice'] = 0;
            foreach ($_SESSION['cart'] as $item){
                $_SESSION['cart.totalQuantity'] += $item['goodQuantity'];
                $_SESSION['cart.totalPrice'] += $item['goodQuantity'] * $item['price'];

            }

        } else {
            $this->updateCart($good->id, 0);
        }
    }

    public function deleteFromCart($id){
        unset($_SESSION['cart'][$id]);
        $_SESSION['cart.totalQuantity'] = 0;
        $_SESSION['cart.totalPrice'] = 0;
        foreach ($_SESSION['cart'] as $item){
            $_SESSION['cart.totalQuantity'] += $item['goodQuantity'];
            $_SESSION['cart.totalPrice'] += $item['goodQuantity'] * $item['price'];

        }
        if($_SESSION['cart.totalQuantity'] == 0) {
            unset($_SESSION['cart.totalQuantity']);
            unset($_SESSION['cart.totalPrice']);
            unset($_SESSION['cart']);
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