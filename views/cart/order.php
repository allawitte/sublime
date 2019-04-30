<?php
use yii\widgets\ActiveForm;
//echo "<pre>";
//var_dump($order);
//echo "</pre>";
$order->subscribe = 1;
$this->title = 'sublime | order';
?>
<div class="container categories">
    <h2>Checkout</h2>
    <?php $form = ActiveForm::begin(['options'=>['class'=>'order_form']]);?>
    <?= $form->field($order, 'name')?>
    <?= $form->field($order, 'email')?>
    <?= $form->field($order, 'phone')?>
    <?= $form->field($order, 'address')?>
    <?= $form->field($order, 'subscribe')->checkbox([ 'template'=> '<div class="form-group field-order-subscribe">{label}{input}</div>']);?>
    <div class="form-field">Total amount: <?= $session['cart.totalPrice']?></div>
    <input type="submit" class="btn btn-success" id="make-order" name="checkout" value="Checkout"/>
    <?php ActiveForm::end();?>
</div>
