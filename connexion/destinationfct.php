<?php
error_reporting(E_ALL);
class destinationfct
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function create($nom, $localisation, $prix, $image, $type, $description)
    {
        $name = addslashes($nom);
        $query = mysqli_query($this->db, "INSERT INTO `destination`(`nom`, `localisation`, `prix`, `image`, `type`, `description`) VALUES ('$nom','$localisation','$prix','$image','$type','$description')");
        if ($query) {
            return true;
        } else {
            return false;
        }
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
    public function getCountdestination()
    {
        // Start requet sql to get rows in table inscription
        $query = mysqli_query($this->db, "SELECT * FROM `destination` ");
        // Start requet sql to count rows of $query
        $nombre = mysqli_num_rows($query);
        // Return nomber of rows
        return $nombre;
    }
    // Get by id
    public function getById($id)
    {
        $stmt = mysqli_prepare($this->db, "SELECT * FROM `destination` WHERE `id` = ?");
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