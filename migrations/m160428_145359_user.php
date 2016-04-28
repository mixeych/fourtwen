<?php

use yii\db\Migration;

class m160428_145359_user extends Migration
{
    public function up()
    {
        $this->createTable('user', array(
            'id' => $this->primaryKey(),
            'email' => $this->string(64)->notNull(),
            'username' => $this->text()->notNull(),
            'password' => $this->text()->notNull(),
            'authKey' => $this->text()->notNull(),
            'accessToken' => $this->text()->notNull(),
        ));
    }

    public function down()
    {
        $this->dropTable('user');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
