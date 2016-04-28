<?php

use yii\db\Migration;

class m160428_145412_usermeta extends Migration
{
    public function up()
    {
        $this->createTable('usermeta', array(
            'id' => $this->primaryKey(),
            'meta_key' => $this->string(250),
            'meta_value' => $this->text()
        ));
    }

    public function down()
    {
        $this->dropTable('usermeta');
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
