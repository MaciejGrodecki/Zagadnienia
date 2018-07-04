<?php

class Printer extends CActiveRecord
{
    public $id;
    public $name;
    
    
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
    public function tableName()
    {
        return 'tbl_printer';
    }
    
    public function relations()
    {
        return array(
            'room'=>array(self::BELONGS_TO, 'Room', 'roomId' ),
            'toner'=>array(self::HAS_MANY, 'Toner', 'printerId'),
            'users'=>array(self::MANY_MANY, 'User', 'tbl_user_printer(userId, printerId)')
        );
    }
}
