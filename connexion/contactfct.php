<?php
error_reporting(E_ALL);
class contactfct
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function create($name, $email, $sujet, $message)
    {
        $name = addslashes($name);
        $sujet = addslashes($sujet);
        $date = date('Y-m-d à H:i');
        $query = mysqli_query($this->db, "INSERT INTO `contact`(`nom`, `email`, `sujet`, `message`, `dateenvoi`, `etat`) VALUES ('$name','$email','$sujet','$message','$date',0)");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public function read()
    {
        $table = array();
        $query = mysqli_query($this->db, "SELECT * FROM `contact`");
        while ($result = mysqli_fetch_array($query)) {
            $table[] = $result;
        }
        return $table;
    }
    public function delete($idcontact)
    {
        $query = mysqli_query($this->db, "DELETE FROM `contact` WHERE `id`='$idcontact'");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}