<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m180416_092043_users
 */
class m180416_092043_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
           'id' => Schema::TYPE_PK,
           'name' => Schema::TYPE_STRING,
           'sname' => Schema::TYPE_STRING,
           'tstamp' => $this->timestamp(), // начиная с версии 2.0.6, можно и так
            // Schema::TYPE_TIMESTAMP,        
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180416_092043_users cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180416_092043_users cannot be reverted.\n";

        return false;
    }
    */
}
