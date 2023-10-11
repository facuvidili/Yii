<?php

use yii\db\Migration;

/**
 * Class m231011_213623_create_table_place_lang
 */
class m231011_213623_create_table_place_lang extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('place_lang', [
            'id' => $this->primaryKey(),
            'place_id' => $this->integer()->notNull(),
            'locality' => $this->string(45)->notNull(),
            'country' => $this->string(45)->notNull(),
            'lang' => $this->string(2)->notNull(),
        ]);

        // creates index for column `author_id`
        $this->createIndex(
            'idx-place_lang-place_id',
            'place_lang',
            'place_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-place_lang-place_id',
            'place_lang',
            'place_id',
            'place',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-place_lang-place_id',
            'place_lang',
        );

        // drops index for column `category_id`
        $this->dropIndex(
            'idx-place_lang-place_id',
            'place_lang',
        );

        $this->dropTable('place_lang');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231011_213623_create_table_place_lang cannot be reverted.\n";

        return false;
    }
    */
}
