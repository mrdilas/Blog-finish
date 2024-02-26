<?php

use yii\db\Migration;

/**
 * Class m240224_130450_add_date_to_comment
 */
class m240224_130450_add_date_to_comment extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->addColumn('{{%comment}}','{{%date}}', $this->date());
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropColumn('{{%comment}}','{{%date}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240224_130450_add_date_to_comment cannot be reverted.\n";

        return false;
    }
    */
}
