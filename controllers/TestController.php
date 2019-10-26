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
                        'roles' => ['@'], // Для закрытие доступа на тесты
                    ],
                ],
            ],

        ];
    }
    public function actionShow($id)
    {
        $model = new TestsAnswers();
        if( $model->load(Yii::$app->request->post()) ) // получаем даные с формы тестов
        {
            if( $model->save())// записываем
            {
                Yii::$app->session->setFlash('success','Данные приняты');// всплывающее сообщение
                return $this->redirect(['result', 'id' => $id]);// выводим на вьюшку
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
        $iduser = \Yii::$app->user->id; // Получаем id пользователя
        $res = TestsAnswers::find()->where(['id_user' => $iduser])->orderBy(['date_time'=>SORT_DESC])->limit(1)->one(); // Находим ответы юзера и выводим последний через сортировку (не самый лучший вариант)
        $lectArr = Tests::find()->where(['id' => $id])->limit(1)->one(); //Вопросы и ответы тестов
        Yii::$app->session->setFlash('success','Данные приняты'); // всплывающее сообщение
        return $this->render('result', compact('lectArr','res')); // выводим на вьюшку
    }

}