<?php
error_reporting(E_ALL);
class hebergementfct
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function create($nom, $localisation, $prix, $image, $type, $description)
    {
        $name = addslashes($nom);
        $query = mysqli_query($this->db, "INSERT INTO `hebergement`(`nom`, `localisation`, `prix`, `image`, `type`, `description`) VALUES ('$nom','$localisation','$prix','$image','$type','$description')");
        if ($query) {
            return true;
        } else {
            return false;
        }
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
    public function read2()
    {
        $table = array();
        $query = mysqli_query($this->db, "SELECT * FROM `hebergement` limit 3");
        while ($result = mysqli_fetch_array($query)) {
            $table[] = $result;
        }
        return $table;
    }
    public function update($idhebergement, $nom, $localisation, $prix, $type, $description)
    {
        $query = mysqli_query($this->db, "UPDATE `hebergement` SET `nom`='$nom', `localisation`='$localisation' ,`prix`='$prix',`type`='$type',`description`='$description'  WHERE `id`='$idhebergement'");
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
    public function getCounthebergement()
    {
        // Start requet sql to get rows in table inscription
        $query = mysqli_query($this->db, "SELECT * FROM `hebergement` ");
        // Start requet sql to count rows of $query
        $nombre = mysqli_num_rows($query);
        // Return nomber of rows
        return $nombre;
    }
    // Get by id
    public function getById($id)
    {
        $stmt = mysqli_prepare($this->db, "SELECT * FROM `hebergement` WHERE `id` = ?");
        if ($stmt === false) {
            return false;
        }
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        mysqli_stmt_close($stmt);
        return $row;
    }
}