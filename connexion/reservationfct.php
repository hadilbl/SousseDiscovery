<?php
error_reporting(E_ALL);


class reservationfct
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
 
    public function read()
    {
        
        $table = array();
        
        $query = mysqli_query($this->db, "SELECT * FROM `reservation`");
       
        while ($result = mysqli_fetch_array($query)) {
            $table[] = $result;
        }
        return $table;
    }
    public function create($idfor, $type, $datereservation, $periode)
    {
        $idfor = addslashes($idfor);
        $type = addslashes($type);
        $datereservation = date('Y-m-d à H:i');
        $query = mysqli_query($this->db, "INSERT INTO `reservation`(`idfor`, `type`, `datereservation`, `periode`) VALUES ('idfor','$type','$datereservation','$periode')");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public function update($idreservation,$idfor, $type, $datereservation, $periode)
    {
        $query = mysqli_query($this->db, "UPDATE `reservation` SET `idfor`='$idfor', `type`='$type' ,`datereservation`='$datereservation','periode'='$periode'  WHERE `id`='$idreservation'");
      
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    
        public function delete($idreservation)
    {
        
        $query = mysqli_query($this->db, "DELETE FROM `reservation` WHERE `id`='$idreservation'");
        
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}
?>