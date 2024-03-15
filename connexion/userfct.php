<?php
error_reporting(E_ALL);


class userfct
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
 
    public function read()
    {
        
        $table = array();
        
        $query = mysqli_query($this->db, "SELECT * FROM `user`");
       
        while ($result = mysqli_fetch_array($query)) {
            $table[] = $result;
        }
        return $table;
    }
    public function update($iduser,$nom,$prenom,$email,$username,$password,$telephone,$dateN,$sexe,$cin,$pays,$ville,$codePostale,$adresse)
    {
        $query = mysqli_query($this->db, "UPDATE `user` SET `nom`='$nom',`prenom`='$prenom',`email`='$email',`username`='$username',`password`='$password',`telephone`='$telephone',`sexe`='$sexe',`dateN`='$dateN',`cin`='$cin',`pays`='$pays',`ville`='$ville',`codePostale`='$codePostale',`adresse`='$adresse' WHERE `id`='$iduser'");
      
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    
        public function delete($iduser)
    {
        
        $query = mysqli_query($this->db, "DELETE FROM `user` WHERE `id`='$iduser'");
        
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function getCountuser()
    {
        // Start requet sql to get rows in table inscription
        $query = mysqli_query($this->db, "SELECT * FROM `user` WHERE `type`=0 ");
        // Start requet sql to count rows of $query
        $nombre = mysqli_num_rows($query);
        // Return nomber of rows
        return $nombre;
    }
    }




?>