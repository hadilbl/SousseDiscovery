<?php
error_reporting(E_ALL);
class transportfct
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function read1()
    {
        $table = array();
        $query = mysqli_query($this->db, "SELECT * FROM `transport`");
        while ($result = mysqli_fetch_array($query)) {
            $table[] = $result;
        }
        return $table;
    }
    public function read()
    {
        $table = array();
        $query = mysqli_query($this->db, "SELECT * FROM `transport` WHERE type = 'transport publique'");
        while ($result = mysqli_fetch_array($query)) {
            $table[] = $result;
        }
        return $table;
    }
    public function read2()
    {
        $table = array();
        $query = mysqli_query($this->db, "SELECT * FROM `transport` WHERE type = 'transport privé'");
        while ($result = mysqli_fetch_array($query)) {
            $table[] = $result;
        }
        return $table;
    }
    public function update($idtransport,$nom_agence,$nom_transport,$type,$description,$prix )
    {
        $query = mysqli_query($this->db, "UPDATE `transport` SET `nom_agence`='$nom_agence', `nom_transport`='$nom_transport' ,`type`='$type',`description`='$description',`prix`='$prix'  WHERE `id`='$idtransport'");
      
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    
        public function delete($idtransport)
    {
        
        $query = mysqli_query($this->db, "DELETE FROM `transport` WHERE `id`='$idtransport'");
        
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}