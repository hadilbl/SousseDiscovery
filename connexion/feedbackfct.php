<?php
error_reporting(E_ALL);


class feedbackfct
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
    public function create($nom, $prenom, $image, $review,$date)
    {
        $nom = addslashes($nom);
        $prenom = addslashes($prenom);
        $date = date('Y-m-d à H:i');
        $query = mysqli_query($this->db, "INSERT INTO `feedback`(`nom`, `prenom`, `avatar`, `Commentaire`, `date`) VALUES ('$nom','$prenom','$image','$review','$date')");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
 
    public function read()
    {
        
        $table = array();
        
        $query = mysqli_query($this->db, "SELECT * FROM `feedback`");
       
        while ($result = mysqli_fetch_array($query)) {
            $table[] = $result;
        }
        return $table;
    }
    public function delete($idfeedback)
    {
        $query = mysqli_query($this->db, "DELETE FROM `feedback` WHERE `id`='$idfeedback'");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}
?>