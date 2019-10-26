<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tests".
 *
 * @property int $id
 * @property int $id_lecture
 * @property string $question
 * @property string $answer1
 * @property string $answer2
 * @property string $answer3
 * @property string $answer4
 * @property string $answer5
 * @property string $right
 * @property string $date_time
 */
class Tests extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tests';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lecture'], 'integer'],
            [['question1', 'answer1_1', 'answer1_2', 'answer1_3', 'right1',
                'question2', 'answer2_1', 'answer2_2', 'answer2_3', 'right2',
                'question3', 'answer3_1', 'answer3_2', 'answer3_3', 'right3'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_lecture' => 'Id Lecture',
            'question1' => 'Question1',
            'answer1_1' => 'Answer1_1',
            'answer1_2' => 'Answer1_2',
            'answer1_3' => 'Answer1_3',
            'right1' => 'Right1',
            'question2' => 'Question2',
            'answer2_1' => 'Answer2_1',
            'answer2_2' => 'Answer2_2',
            'answer2_3' => 'Answer2_3',
            'right2' => 'Right2',
            'question3' => 'Question3',
            'answer3_1' => 'Answer3_1',
            'answer3_2' => 'Answer3_2',
            'answer3_3' => 'Answer3_3',
            'right3' => 'Right1',
        ];
    }
}
