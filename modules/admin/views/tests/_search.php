<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TestsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tests-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_lecture') ?>

    <?= $form->field($model, 'question1') ?>

    <?= $form->field($model, 'answer1_1') ?>

    <?= $form->field($model, 'answer1_2') ?>

    <?php // echo $form->field($model, 'answer3') ?>

    <?php // echo $form->field($model, 'answer4') ?>

    <?php // echo $form->field($model, 'answer5') ?>

    <?php // echo $form->field($model, 'right') ?>

    <?php // echo $form->field($model, 'date_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
