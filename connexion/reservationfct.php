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
    public function read2()
{
    $table = array();
    $query = mysqli_query($this->db, "SELECT * FROM `reservation` ORDER BY dateReservation DESC LIMIT 6");
    while ($result = mysqli_fetch_array($query)) {
        $table[] = $result;
    }
    return $table;
}
    public function create($idfor, $type, $idClient, $dateD, $dateF)
    {
        $dateReservation = date('Y-m-d à H:i');
        $query = mysqli_prepare($this->db, "INSERT INTO `reservation`(`idfor`, `type`, `idClient`, `dateD`, `dateF`, `dateReservation`, `etat`) VALUES (?, ?, ?, ?, ?, ?,0)");
    
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
    
    public function update($idreservation,$etat)
    {
        $query = mysqli_query($this->db, "UPDATE `reservation` SET `etat`='$etat'");
      
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
    public function getCountreservation()
    {
        // Start requet sql to get rows in table inscription
        $query = mysqli_query($this->db, "SELECT * FROM `reservation` ");
        // Start requet sql to count rows of $query
        $nombre = mysqli_num_rows($query);
        // Return nomber of rows
        return $nombre;
    }


}
?>