<?php defined('SYSPATH') or die('No direct script access.');

class Database_MSSQL extends Kohana_Database_MSSQL
{
    public function connection()
    {
        // Make sure the database is connected
        $this->_connection or $this->connect();
        
        // Return it
        return $this->_connection;
    }
}
