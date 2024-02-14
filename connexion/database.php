<?php

error_reporting(E_ALL);

class database
{
    private $link;
    
    public function __construct()
    {
        global $link;
        
        if (is_null($link)) {
            
            $server = 'localhost';
            $login = 'root';
            $password = '';
            $database = 'sousse_discovery';
    
            try {
                $this->link = new mysqli($server, $login, $password, $database);
                $this->link->set_charset("utf8");
            } catch (mysqli_sql_exception $e) {
                echo 'Problem de connexion--> ' . $e;
            }
        }
    }
    public function getConnectionDB()
    {
        return $this->link;
    }
}
?>