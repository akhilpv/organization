<?php

use yii\db\Migration;

/**
 * Class m210323_150818_employe_info
 */
class m210323_150818_employe_info extends Migration
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
        echo "m210323_150818_employe_info cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
         $this->createTable('employe_info', [
            'id' => $this->primaryKey(),
            'emp_name' => $this->string(),            
            'department' => $this->string(),
            'dob' => $this->date(),
            'joining_date' => $this->date(),
            'emp_code' => $this->text(),
            'created_on' => $this->date()
        ]);
    }

    public function down()
    {
        $this->dropTable('employe_info');
    }
    
}
