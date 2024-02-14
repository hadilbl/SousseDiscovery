<?php
error_reporting(E_ALL);


class hebergementfct
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
 
    public function read()
    {
        
        $table = array();
        
        $query = mysqli_query($this->db, "SELECT * FROM `hebergement`");
       
        while ($result = mysqli_fetch_array($query)) {
            $table[] = $result;
        }
        return $table;
    }
    public function update($idhebergement,$nom,$localisation,$prix, $type)
{
    $query = mysqli_query($this->db, "UPDATE `hebergement` SET `nom`='$nom', `localisation`='$localisation' ,`prix`='$prix',`type`='$type'  WHERE `id`='$idhebergement'");
  
    if ($query) {
        return true;
    } else {
        return false;
    }
}

    public function delete($idhebergement)
{
    
    $query = mysqli_query($this->db, "DELETE FROM `hebergement` WHERE `id`='$idhebergement'");
    
    if ($query) {
        return true;
    } else {
        return false;
    }
}
}



?>