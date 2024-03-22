<?php
error_reporting(E_ALL);
class scanne
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function getCnxCpt($username, $password)
    {
        $username= addslashes($username);
       $password = md5($password);
        $query = mysqli_query($this->db, "SELECT * FROM `user` WHERE `username` ='{$username}' AND `password` ='{$password}'");
        $result = mysqli_fetch_assoc($query);
        if ($query) {
            return $result;
        } else {
            return false;
        }
    }
    public function getCptById($id)
    {
        $query = mysqli_query($this->db, "SELECT * FROM `user` WHERE `id` ='{$id}'");
        $result = mysqli_fetch_assoc($query);
        if ($query) {
            return $result;
        } else {
            return false;
        }
    }
}