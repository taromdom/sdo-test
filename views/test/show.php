<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

echo '<h2>Тест для лекции:'.$lect->name.'</h2>';

?>

<?php $form = ActiveForm::begin(['options'=>['id'=>'testForm']]); ?>
    <h2><?=$tests['question1']?></h2>
    <?= $form->field($model, 'answer1')->radio(['label' => $tests['answer1_1'], 'value' => 1, 'uncheck' => null]) ?>
    <?= $form->field($model, 'answer1')->radio(['label' => $tests['answer1_2'], 'value' => 2, 'uncheck' => null]) ?>
    <?= $form->field($model, 'answer1')->radio(['label' => $tests['answer1_3'], 'value' => 3, 'uncheck' => null]) ?>

    <h2><?=$tests['question2']?></h2>
<?= $form->field($model, 'answer2')->radio(['label' => $tests['answer2_1'], 'value' => 1, 'uncheck' => null]) ?>
<?= $form->field($model, 'answer2')->radio(['label' => $tests['answer2_2'], 'value' => 2, 'uncheck' => null]) ?>
<?= $form->field($model, 'answer2')->radio(['label' => $tests['answer2_3'], 'value' => 3, 'uncheck' => null]) ?>

    <h2><?=$tests['question3']?></h2>
<?= $form->field($model, 'answer3')->radio(['label' => $tests['answer3_1'], 'value' => 1, 'uncheck' => null]) ?>
<?= $form->field($model, 'answer3')->radio(['label' => $tests['answer3_2'], 'value' => 2, 'uncheck' => null]) ?>
<?= $form->field($model, 'answer3')->radio(['label' => $tests['answer3_3'], 'value' => 3, 'uncheck' => null]) ?>
<?= $form->field($model, 'id_user')->hiddenInput(['value' => $iduser])->label(false); ?>
<?= $form->field($model, 'id_test')->hiddenInput(['value' => $tests['id_lecture']])->label(false); ?>


<?= Html::submitButton('Отправить', ['class'=>'btn btn-success'])?>
<?php ActiveForm::end(); ?>