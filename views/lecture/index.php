<h1>Лекции</h1>
<div >
<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = 'Лекции';
$this->params['breadcrumbs'][] = $this->title;


foreach ($models as $value){
    echo '<h2>'.$value['name'].'</h2><br>';
    echo $value['description'].'<br>';
    echo '<a href="'.Url::toRoute(['lecture/show','id'=>$value['id']]).'" class="btn btn-success">Открыть лекцию</a>';
}
?>
</div>
<?php
echo LinkPager::widget([
    'pagination' => $pages,
]);
?>
