<?php

class m180706_062131_add_ip_address_to_computer_table extends CDbMigration
{
	public function safeUp()
	{
            $this->addColumn('tbl_computer', 'ipAddress', 'varchar(100)');
	}

	public function safeDown()
	{
		$this->dropColumn('tbl_computer', 'ipAddress');
	}

}