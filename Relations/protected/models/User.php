<?php

class User extends CActiveRecord
{
    public $id;
    public $name;
    
    
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
    public function tableName()
    {
        return 'tbl_usr';
    }
    
    public function relations() 
    {
        return array(
            'printers'=>array(self::MANY_MANY, 'Printer', 
                'tbl_user_printer(userId, printerId)')
        );
    }
}


