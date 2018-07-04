<?php

class Room extends CActiveRecord
{
    public $id;
    public $name;
    
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
    public function tableName()
    {
        return 'tbl_room';
    }
    
}

