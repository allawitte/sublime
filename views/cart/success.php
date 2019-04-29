<?php
/* @var $this yii\web\View */
$this->title='sublime | success';
use yii\helpers\Url;
?>
<div class="categories text-center">
    <h2>Your order with number <?= $session['currentId'] ?> is accepted</h2>
    <a href="/" class="btn btn-success">Back to home</a>
</div>


<?php
if(isset($_POST['Order'])){
    Yii::$app->response->redirect(Url::to('order'));
}
