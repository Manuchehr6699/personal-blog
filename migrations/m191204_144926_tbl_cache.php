<?php

use yii\db\Migration;

/**
 * Class m191204_144926_tbl_cache
 */
class m191204_144926_tbl_cache extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%cache}}', [
            'id' => $this->primaryKey(),
            'expire' => $this->integer(11),
            'data' => $this->text(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191204_144926_tbl_cache cannot be reverted.\n";
        $this->dropTable('{{%cache}}');
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191204_144926_tbl_cache cannot be reverted.\n";

        return false;
    }
    */
}
