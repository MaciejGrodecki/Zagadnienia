<?php

class PrinterController extends CController
{
    public function actionIndex()
    {
        $criteria = new CDbCriteria();
      
        
//        $criteria->compare('id', 1);
//        $criteria->with = array('users');
//        $printer = Printer::model()->with('users')->find($criteria);
        $printer = Printer::model()->with('users')->findByPk(1);
        
        
        $this->render("index", array('printer' => $printer));
    }
}


