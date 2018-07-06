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
//		echo "m180706_060522_create_computer_table does not support migration down.\n";
//		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}