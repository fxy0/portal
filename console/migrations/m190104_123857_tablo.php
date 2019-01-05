<?php

use yii\db\Migration;

/**
 * Class m190104_123857_tablo
 */
class m190104_123857_tablo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
       
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190104_123857_tablo cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
         $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $TABLE_NAME = 'notes';
        $this->createTable($TABLE_NAME, [
            'id' => $this->int(11)->notNull(),
            'ad' => $this->string(50)->notNull(),
            'text' => $this->text()->notNull(),
			'date' => $this->date()->$this->dateTime()
            
        ], $tableOptions);
    }

    public function down()
    {
        echo "m190104_123857_tablo cannot be reverted.\n";
		$TABLE_NAME = 'notes';
        $this->dropTable($TABLE_NAME);

        return false;
    }
    
}
