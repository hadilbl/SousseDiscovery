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
    public function create($idfor, $type, $idClient, $dateD, $dateF)
    {
        $dateReservation = date('Y-m-d à H:i');
        $query = mysqli_prepare($this->db, "INSERT INTO `reservation`(`idfor`, `type`, `idClient`, `dateD`, `dateF`, `dateReservation`, `etat`) VALUES (?, ?, ?, ?, ?, ?, 1)");
    
        mysqli_stmt_bind_param($query, "issssi", $idfor, $type, $idClient, $dateD, $dateF, $dateReservation);
    
        mysqli_stmt_execute($query);
    
        if (mysqli_stmt_affected_rows($query) > 0) {
            mysqli_stmt_close($query);
            return true;
        } else {
            mysqli_stmt_close($query);
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

    public function getlistbyclient($idClient) 
    {
        
        $table = array();
        
        $query = mysqli_query($this->db, "SELECT * FROM `reservation` where `idClient`='$idClient'");
       
        while ($result = mysqli_fetch_array($query)) {
            $table[] = $result;
        }
        return $table;
    }
    public function getLastInsertedReservationId()
    {
        $query = mysqli_query($this->db, "SELECT LAST_INSERT_ID() as id");
        $result = mysqli_fetch_assoc($query);
        return $result['id'];
    }

}
?>