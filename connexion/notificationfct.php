<?php
error_reporting(E_ALL);

class notificationfct
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function createNotification($notification, $idreservation)
{
    $datenotif = date('Y-m-d H:i:s');
    $query = mysqli_prepare($this->db, "INSERT INTO `notification` (`notification`, `idreservation`, `datenotif`) VALUES (?, ?, ?)");
    
    mysqli_stmt_bind_param($query, "sis", $notification, $idreservation, $datenotif);
    
    mysqli_stmt_execute($query);
    
    if (mysqli_stmt_affected_rows($query) > 0) {
        mysqli_stmt_close($query);
        return true;
    } else {
        $error = mysqli_error($this->db);
        mysqli_stmt_close($query);
        die("Erreur lors de la création de la notification : " . $error);
    }
}

    

    public function getNotifications()
    {
        $notifications = array();
        
        // Exécuter la requête SQL
        $query = mysqli_query($this->db, "SELECT * FROM `notification` ORDER BY `datenotif` DESC");
       
        // Vérifier s'il y a une erreur MySQL
        if (!$query) {
            die('Erreur MySQL : ' . mysqli_error($this->db));
        }
    
        // Parcourir les résultats et les stocker dans un tableau
        while ($result = mysqli_fetch_array($query)) {
            $notifications[] = $result;
        }
        return $notifications;
    }
    
    
}
?>
