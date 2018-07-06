<?php

class m180706_063037_insert_first_computer_to_computer_table extends CDbMigration
{
	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
            $this->insert('tbl_computer', array(
                'name' => 'PC_1',
                'inventoryNumber' => 'IN-PC1-164',
                'ipAddress' => '192.168.0.1'
            ));
	}

	public function safeDown()
	{
            $this->delete('tbl_computer', array(
                'and',
                "name = 'PC_1'", 
                "inventoryNumber = 'IN-PC1-164'",
                "ipAddress = '192.168.0.1'")
                );

	}
	
}