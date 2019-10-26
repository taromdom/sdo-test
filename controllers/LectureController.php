<?php


namespace app\controllers;

use app\models\Lecture;
use yii\web\Controller;
use yii\data\Pagination;

class LectureController extends Controller
{
    public function actionIndex()
    {
        $this->view->title = 'Лекции';
        $query = Lecture::find();
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pagesize'=>3]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();//Находим все лекции 

        return $this->render('index', [
            'models' => $models,
            'pages' => $pages,
        ]); // Для пагинации
    }

    public function actionShow($id=null)
    {
        $lec = Lecture::find()->asArray()->where(['id'=>$id])->limit(1)->one(); //Находим по айди лекцию
        return $this->render('show', compact('lec','id'));
    }

}