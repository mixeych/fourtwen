<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Blog';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Hi! You can add your article.
    </p>
    <?php $form = ActiveForm::begin(); ?>

    <?=$form->field($model, 'title') ?>

    <?=$form->field($model, 'text') ?>

    <div class="form-group">
        <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
    </div>
    <div class="container">
        <?php
            if($model->text&&$model->title){
                ?>
                <h3><?=Html::encode($model->title) ?></h3>
                <p><?=Html::encode($model->text) ?></p>
                <?php
            }
        ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>