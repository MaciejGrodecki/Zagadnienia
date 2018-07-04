<?php

class Toner extends CActiveRecord
{
    public $id;
    public $name;
    
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    
    public function tableName()
    {
        return 'tbl_toner';
    }
    
    public function relations() 
    {
        return array(
            'printer'=>array(self::BELONGS_TO, 'Toner', 'printerId')
        );
    }
}

