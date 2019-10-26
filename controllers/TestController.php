<?php


namespace app\controllers;

use app\models\Lecture;
use app\models\TestsAnswers;
use app\models\Tests;
use yii\filters\AccessControl;
use yii\web\Controller;
use Yii;

class TestController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],

        ];
    }
    public function actionShow($id)
    {
        $model = new TestsAnswers();
        if( $model->load(Yii::$app->request->post()) )
        {
            if( $model->save())
            {
                Yii::$app->session->setFlash('success','Данные приняты');
                return $this->redirect(['result', 'id' => $id]);
            }else{
                Yii::$app->session->setFlash('error','Ошибка');

            }
            return $this->actionResult($id);
        }
        $tests = Tests::find()->asArray()->where(['id_lecture'=>$id])->one();
        $iduser = \Yii::$app->user->id;
        $lect = Lecture::find()->where(['id' => $id])->limit(1)->one();
        return $this->render('show', compact('tests', 'model','lect','iduser'));
    }

    public function actionResult($id)
    {
        $iduser = \Yii::$app->user->id;
        $res = TestsAnswers::find()->where(['id_user' => $iduser])->orderBy(['date_time'=>SORT_DESC])->limit(1)->one();
        $lectArr = Tests::find()->where(['id' => $id])->limit(1)->one();
        Yii::$app->session->setFlash('success','Данные приняты');
        return $this->render('result', compact('lectArr','res'));
    }

}