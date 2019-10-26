<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tests */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tests-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_lecture')->textInput() ?>

    <?= $form->field($model, 'question1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer1_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer1_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer1_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'right1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'question2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer2_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer2_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer2_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'right2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'question3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer3_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer3_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer3_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'right3')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
