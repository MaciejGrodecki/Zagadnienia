<?php

class m180706_060522_create_computer_table extends CDbMigration
{
	public function safeUp()
	{
            $this->createTable('tbl_computer', array(
                'id'=>'pk',
                'name'=>'string NOT NULL',
                'inventoryNumber'=>'string'
            ));
	}

	public function safeDown()
	{
            $this->dropTable('tbl_computer');
	}

}