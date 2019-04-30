<?php

namespace app\controllers;
use app\models\Subscribtion;
use yii\web\Request;
use Yii;

class SubscribeController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'nonews.php';
        $request = Yii::$app->request;
        $token = $request->get('token');
        $subscription = new Subscribtion();
        $subscription = $subscription->getEmailByToken($token);
       if($subscription){
            $subscription->token = '';
            $subscription->save();
            return $this->render('index', compact('token'));
        }
        else {
            return $this->render('filed');
        }

    }

    public function actionAdd(){
        $subscription = new Subscribtion();
        $request = Yii::$app->request;

        $email = $request->get('email');
        $token = substr(md5(uniqid()), 0, 32);

        $subscription->email = $email;
        $subscription->token = $token;
        $subscription->save();
        Yii::$app->mailer->compose('subscribe-mail', ['token' => $token])
           // ->setFrom(["allawi1q@allawitte.nl" => 'Customer service'])
            ->setFrom(["allawi1q" => 'Customer service'])
            ->setTo([$email])
            ->setSubject('Subscribe for Sublime')
            ->send();

    }

}
