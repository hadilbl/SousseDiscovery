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
    public function update($idreservation,$idclt,$idhebergement,$iddestination)
    {
        $query = mysqli_query($this->db, "UPDATE `reservation` SET `idclt`='$idclt', `idhebergement`='$idhebergement' ,`iddestination`='$iddestination'  WHERE `id`='$idreservation'");
      
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