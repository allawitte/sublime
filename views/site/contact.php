<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php if(Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
    <div class="alert alert-success" role="alert">
        <h3>Thank you for contacting us! Your message was sent successfully</h3>
    </div>
<?php endif; ?>

    <div class="home home-small">
        <div class="home_container">
            <div class="home_background" style="background-image:url(/web/images/contact.jpg)"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li>Contact</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->

    <div class="contact">
        <div class="container">
            <div class="row">

                <!-- Get in touch -->
                <div class="col-lg-8 contact_col">
                    <div class="get_in_touch">
                        <div class="section_title">Get in Touch</div>
                        <div class="section_subtitle">Say hello</div>
                        <div class="contact_form_container">
                            <?php $form = ActiveForm::begin(['options' => ['class' => 'order_form']]); ?>
                            <div class="row">
                                <div class="col-xl-6">
                                    <?= $form->field($contact, 'first_name')->textInput(['class' => 'contact_input', 'required'=>true]) ?>
                                </div>
                                <div class="col-xl-6">
                                    <?= $form->field($contact, 'last_name')->textInput(['class' => 'contact_input', 'required'=>true]) ?>
                                </div>
                                <div class="col-xl-12">
                                    <?= $form->field($contact, 'subject')->textInput(['class' => 'contact_input', 'required'=>true]) ?>
                                </div>
                                <div class="col-xl-12">
                                    <?= $form->field($contact, 'message')->textarea(['class' => 'contact_input contact_textarea', 'required'=>true]) ?>
                                </div>
                                <div class="col-xl-12">
                                    <button class="btn contact_button newsletter_button" id="make-order">Send Message
                                    </button>
                                </div>
                            </div>
                            <?php ActiveForm::end(); ?>

                        </div>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="col-lg-3 offset-xl-1 contact_col">
                    <div class="contact_info">
                        <div class="contact_info_section">
                            <div class="contact_info_title">Marketing</div>
                            <ul>
                                <li>Phone: <span>+53 345 7953 3245</span></li>
                                <li>Email: <span>yourmail@gmail.com</span></li>
                            </ul>
                        </div>
                        <div class="contact_info_section">
                            <div class="contact_info_title">Shippiing & Returns</div>
                            <ul>
                                <li>Phone: <span>+53 345 7953 3245</span></li>
                                <li>Email: <span>yourmail@gmail.com</span></li>
                            </ul>
                        </div>
                        <div class="contact_info_section">
                            <div class="contact_info_title">Information</div>
                            <ul>
                                <li>Phone: <span>+53 345 7953 3245</span></li>
                                <li>Email: <span>yourmail@gmail.com</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="row map_row">-->
            <!--<div class="col">-->

            <!--&lt;!&ndash; Google Map &ndash;&gt;-->
            <!--<div class="map">-->
            <!--<div id="google_map" class="google_map">-->
            <!--<div class="map_container">-->
            <!--<div id="map"></div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->

            <!--</div>-->
            <!--</div>-->
        </div>
    </div>
<?php
$this->registerJsFile('https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA', ['depends' => \app\assets\AppAsset::class]);
$this->registerJsFile('@web/js/contact.js', ['depends' => \app\assets\AppAsset::class]);
?>