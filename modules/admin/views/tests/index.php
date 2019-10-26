<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TestsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tests-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tests', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_lecture',
            'question1',
            'answer1_1',
            'answer1_2',
            'answer1_3',
            'right1',
            'question2',
            'answer2_1',
            'answer2_2',
            'answer2_3',
            'right2',
            'question3',
            'answer3_1',
            'answer3_2',
            'answer3_3',
            'right3',
            'date_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
