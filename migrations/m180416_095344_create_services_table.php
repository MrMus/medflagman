<?php

use yii\db\Migration;

/**
 * Handles the creation of table `services`.
 * Has foreign keys to the tables:
 *
 * - `products`
 */
class m180416_095344_create_services_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('services', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(),
            'name' => $this->string(),
            'tstamp' => $this->timestamp()
        ]);

        // creates index for column `product_id`
        $this->createIndex(
            'idx-services-product_id',
            'services',
            'product_id'
        );

        // add foreign key for table `products`
        $this->addForeignKey(
            'fk-services-product_id',
            'services',
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
            'fk-services-product_id',
            'services'
        );

        // drops index for column `product_id`
        $this->dropIndex(
            'idx-services-product_id',
            'services'
        );

        $this->dropTable('services');
    }
}
