<?php
use yii\widgets\ActiveForm;
//echo "<pre>";
//var_dump($order);
//echo "</pre>";
?>
<div class="container">
    <h2>Оформление заказа</h2>
    <?php $form = ActiveForm::begin();?>
    <?= $form->field($order, 'name')?>
    <?= $form->field($order, 'email')?>
    <?= $form->field($order, 'phone')?>
    <?= $form->field($order, 'address')?>
    <div class="form-field"><?= $session['cart.totalPrice']?></div>
    <button class="btn btn-success">Оформить</button>
    <?php ActiveForm::end();?>
</div>
