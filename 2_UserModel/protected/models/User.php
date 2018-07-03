<?php

class User extends CModel
{
    private $id;
    private $name;

    private $users = array(
        "Jan Kowalski",
        "Anna Lewandowska",
        "Tomasz Kowalski"
    );

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
        return $this->users;
    }
}