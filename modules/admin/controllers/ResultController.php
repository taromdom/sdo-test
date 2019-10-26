<?php


namespace app\modules\admin\controllers;

use app\models\Tests;
use app\models\TestsAnswers;
use app\models\User;
use yii\web\Controller;
use Yii;

class ResultController extends Controller
{
    public function actionIndex()
    {
        $res = TestsAnswers::find()->asArray()->all();
        $tes = Tests::find()->asArray()->all();
        $user = User::find()->asArray()->all();
        $names = Yii::$app->db->createCommand('SELECT u.id, u.username, d.answer1, d.answer2, d.answer3, t.right1, t.right2, t.right3, l.name, d.date_time
FROM tests_answers d
 LEFT OUTER JOIN user u ON d.id_user = u.id 
 LEFT OUTER JOIN tests t ON d.id_test = t.id
 LEFT OUTER JOIN lecture l ON t.id_lecture = l.id')
            ->queryAll();
        //$lectArr = Tests::find()->where(['id' => $id])->limit(1)->one();
        return $this->render('index', compact('res','tes','user','names'));
    }

}