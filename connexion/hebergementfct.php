<?php
error_reporting(E_ALL);
class hebergementfct
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function create($nom, $localisation, $prix, $type, $description, $image)
    {
        $name = addslashes($nom);
        $query = mysqli_query($this->db, "INSERT INTO `hebergement`(`nom`, `localisation`, `prix`, `type`, `description`, `image`) VALUES ('$nom', '$localisation', '$prix', '$type', '$description', '$image')");
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
    function get_hebergement_details($idhebergement) {
        $db = new database(); // Créer une instance de la classe database
    
        // Récupérer la connexion à la base de données
        $link = $db->getConnectionDB();
    
        try {
            // Préparer la requête SQL
            $query = "SELECT * FROM hebergements WHERE id = ?";
            $stmt = $link->prepare($query);
            // Lier les paramètres
            $stmt->bind_param('i', $idhebergement);
            // Exécuter la requête
            $stmt->execute();
            // Récupérer le résultat
            $result = $stmt->get_result();
            // Récupérer les détails de l'hébergement
            $hebergement_details = $result->fetch_assoc();
            // Retourner les détails de l'hébergement
            return $hebergement_details;
        } catch (mysqli_sql_exception $e) {
            echo "Erreur lors de la récupération des détails de l'hébergement: " . $e->getMessage();
            return false;
        }
    }
    
}