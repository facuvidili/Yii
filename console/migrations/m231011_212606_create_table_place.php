<?php

use yii\db\Migration;

/**
 * Class m231011_212606_create_table_place
 */
class m231011_212606_create_table_place extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('place', [
            'id' => $this->primaryKey(),
            'place_id' => $this->string(45)->notNull(),
            'lat' => $this->string(45)->notNull(),
            'lng' => $this->string(45)->notNull(),
            'country_code' => $this->string(45)->notNull(),
            'is_country' => $this->boolean()->notNull()



        ]);
    
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news');

        return false;
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231011_212606_create_table_place cannot be reverted.\n";

        return false;
    }
    */
}
