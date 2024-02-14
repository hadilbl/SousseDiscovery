<?php
error_reporting(E_ALL);


class signupfct
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
   
    public function create($name,$firstname, $sex, $username,$password, $cin,$phone,$email,$address)
    {
        $name = addslashes($name);
        $password = md5($password);
    
        $query = mysqli_query($this->db, "INSERT INTO `admin`(`name`, `firstname`, `sex`, `username`, `password`, `cin`, `phone`, `email`, `address`) VALUES ('$name','$firstname','$sex','$username','$password','$cin','$phone','$email','$address')");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }}
    