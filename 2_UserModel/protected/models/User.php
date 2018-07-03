<?php

class User extends CActiveRecord
{
    private $id;
    private $name;

    private static $users = array(
        "1" => "Jan",
        "2" => "Anna",
        "3" => "Tomasz"
    );

    public function __construct($name)
    {
        $this->setId($this->getLastElementKey() + 1);
        $this->setName($name);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function browseUsers()
    {
        return User::$users;
    }

    public function add()
    {
        if(!isset($this->id))
        {
            echo 'Id is not set';
        }

        if(!isset($this->name))
        {
            echo 'Name is not set';
        }

        User::$users[$this->id] = $this->name;
    }

    private function getLastElementKey()
    {
        end(User::$users);
        return key(User::$users);
    }

    
}