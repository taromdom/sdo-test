<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tests_answers}}`.
 */
class m191017_191507_create_tests_answers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tests_answers}}', [
            'id' => $this->primaryKey(),
            'id_user' => $this->integer(),
            'id_test' => $this->integer(),
            'answer' => $this->string(),
            'date_time' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tests_answers}}');
    }
}
