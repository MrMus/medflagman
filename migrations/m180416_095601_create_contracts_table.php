<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contracts`.
 * Has foreign keys to the tables:
 *
 * - `products`
 */
class m180416_095601_create_contracts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contracts', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNull(),
            'active' => $this->boolean(),
            'tstamp' => $this->timestamp()
        ]);

        // creates index for column `product_id`
        $this->createIndex(
            'idx-contracts-product_id',
            'contracts',
            'product_id'
        );

        // add foreign key for table `products`
        $this->addForeignKey(
            'fk-contracts-product_id',
            'contracts',
            'product_id',
            'products',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `products`
        $this->dropForeignKey(
            'fk-contracts-product_id',
            'contracts'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            'idx-contracts-product_id',
            'contracts'
        );

        $this->dropTable('contracts');
    }
}
