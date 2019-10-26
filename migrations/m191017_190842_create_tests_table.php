<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tests}}`.
 */
class m191017_190842_create_tests_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tests}}', [
            'id' => $this->primaryKey(),
            'id_lecture' => $this->integer(),
            'question' => $this->string(),
            'answer1' => $this->string(),
            'answer2' => $this->string(),
            'answer3' => $this->string(),
            'answer4' => $this->string(),
            'answer5' => $this->string(),
            'right' => $this->string(),
            'date_time' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tests}}');
    }
}
