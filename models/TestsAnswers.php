<?php

namespace app\models;

use Yii;


/**
 * This is the model class for table "tests_answers".
 *
 * @property int $id
 * @property int $id_user
 * @property int $id_test
 * @property string $date_time
 */
class TestsAnswers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tests_answers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'id_test'], 'integer'],
            [['date_time'], 'safe'],
            [['answer1','answer2','answer3'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_test' => 'Id Test',
            'answer1' => 'answer1',
            'answer2' => 'answer2',
            'answer3' => 'answer3',
            'date_time' => 'Date Time',
        ];
    }
}
