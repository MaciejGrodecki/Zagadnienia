<?php

class TonerController extends CController
{
    public function actionIndex()
    {
        $criteria = new CDbCriteria();
        $criteria->compare('id', 1);
        
        $toner = Toner::model()->findAll();
        
        
        $this->render('index', array('toner' => $toner));
    }
}

