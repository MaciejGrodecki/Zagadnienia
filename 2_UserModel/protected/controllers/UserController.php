<?php

class UserController extends CController
{


    public function actionIndex()
    {
        $users = User::model()->findAll();
        $this->render('index', array('users' => $users));
   
    }

    public function actionGetId()
    {
        $criteria = new CDbCriteria();
        // $criteria->condition = 'id=:id';
        // $criteria->params = array(':id'=>5);
        $criteria->compare('id', 5);
        
        $user = User::model()->find($criteria);

        $this->render('get', array('user' => $user));
    }

    public function actionGetName()
    {
        $criteria = new CDbCriteria();
        // $criteria->condition = 'name LIKE :name';
        // $criteria->params = array(':name'=>'tomasz' . '%');

        // $user = User::model()->find($criteria);

        $criteria->compare('name', 'tomasz', 'LIKE');
        $user = User::model()->find($criteria);

        $this->render('get', array('user' => $user));
    }
}