<?php

interface DatabaseInterface
{
    public function Connect();
    public function Disconnect();
    public function setDatabaseName($databaseName);
}

