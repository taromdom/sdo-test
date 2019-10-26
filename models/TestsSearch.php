<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tests;

/**
 * TestsSearch represents the model behind the search form of `app\models\Tests`.
 */
class TestsSearch extends Tests
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_lecture'], 'integer'],
            [['question1', 'answer1_1', 'answer1_2', 'answer1_3', 'right1',
                'question2', 'answer2_1', 'answer2_2', 'answer2_3', 'right2',
                'question3', 'answer3_1', 'answer3_2', 'answer3_3', 'right3', 'date_time'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Tests::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_lecture' => $this->id_lecture,
            'date_time' => $this->date_time,
        ]);

        $query->andFilterWhere(['like', 'question1', $this->question1])
            ->andFilterWhere(['like', 'answer1_1', $this->answer1_1])
            ->andFilterWhere(['like', 'answer1_2', $this->answer1_2])
            ->andFilterWhere(['like', 'answer1_3', $this->answer1_3])
            ->andFilterWhere(['like', 'right1', $this->right1])
        ->andFilterWhere(['like', 'question2', $this->question2])
        ->andFilterWhere(['like', 'answer2_1', $this->answer2_1])
        ->andFilterWhere(['like', 'answer2_2', $this->answer2_2])
        ->andFilterWhere(['like', 'answer2_3', $this->answer2_3])
        ->andFilterWhere(['like', 'right2', $this->right2])
        ->andFilterWhere(['like', 'question3', $this->question3])
        ->andFilterWhere(['like', 'answer3_1', $this->answer3_1])
        ->andFilterWhere(['like', 'answer3_2', $this->answer3_2])
        ->andFilterWhere(['like', 'answer3_3', $this->answer3_3])
        ->andFilterWhere(['like', 'right3', $this->right3]);

        return $dataProvider;
    }
}
