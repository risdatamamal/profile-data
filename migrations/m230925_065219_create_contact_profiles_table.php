<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contact_profiles}}`.
 */
class m230925_065219_create_contact_profiles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contact_profiles}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull()->unique(),
            'phone_number' => $this->string()->notNull(),
            'address' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contact_profiles}}');
    }
}
