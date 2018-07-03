<?php

class UserController extends CController
{
    public function actionIndex($name)
    {
        $user = new User($name);
        $user->add();

        $usersArray = $user->browseUsers();
        
        $this->render('index', array('usersArray' => $usersArray));       
    }
}