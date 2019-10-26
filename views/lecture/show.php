<?php
use yii\helpers\Url;

echo '<h1>'.$lec['name'].'</h1>';
echo '<p>'.$lec['description'].'</p>';
echo '<p>'.$lec['video'].'</p>';
echo '<a href="'.Url::toRoute(['test/show','id'=>$lec['id']]).'" class="btn btn-success">Пройти тест</a>';
