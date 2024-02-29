<?php
error_reporting(E_ALL);
class destinationfct
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function read()
    {
        $table = array();
        $query = mysqli_query($this->db, "SELECT * FROM `destination`");
        while ($result = mysqli_fetch_array($query)) {
            $table[] = $result;
        }
        return $table;
    }
    public function read2()
    {
        $table = array();
        $query = mysqli_query($this->db, "SELECT * FROM `destination` limit 5");
        while ($result = mysqli_fetch_array($query)) {
            $table[] = $result;
        }
        return $table;
    }
    public function update($iddestination, $nom, $localisation, $type, $prix)
    {
        $query = mysqli_query($this->db, "UPDATE `destination` SET `nom`='$nom', `localisation`='$localisation',`type`='$type' ,`prix`='$prix'  WHERE `id`='$iddestination'");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public function delete($iddestination)
    {
        $query = mysqli_query($this->db, "DELETE FROM `destination` WHERE `id`='$iddestination'");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}