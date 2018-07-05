<?php
require_once 'DatabaseInterface.php';
class Database implements DatabaseInterface
{
    private $dbName;
    
    public function Connect() 
    {
        echo 'Connecting to database...';
    }

    public function Disconnect() 
    {
        echo 'Disconnecting database...';
    }
    
    public function setDatabaseName($databaseName)
    {
        $this->dbName = $databaseName;
    }

}

