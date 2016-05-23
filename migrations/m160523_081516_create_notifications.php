<?php

use yii\db\Migration;

/**
 * Handles the creation for table `notification`.
 */
class m160523_081516_create_notifications extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('Notification', [
            'Id' => $this->primaryKey(),
            'UserId' => $this->integer()->notNull(),
            'Message' =>$this->string()->notNull(),
            'DateSend' => $this->timestamp()->notNull(),
            'Read' => $this->boolean()->defaultValue(false),
            'Type' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('Notification');
    }
}
