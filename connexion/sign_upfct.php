<?php
error_reporting(E_ALL);
class signupfct
{
    private $db;
    public function __construct($db)
    {
        $this->db = $db;
    }
    public function create($nom, $prenom, $email, $username, $password, $telephone,$image,$sexe, $dateN, $cin, $pays, $ville, $codePostale, $addresse)
    {
        $nom = addslashes($nom);
        $password = md5($password);
        $query = mysqli_query($this->db, "INSERT INTO `user`(`nom`,`prenom`,`email`,`username`,`password`,`telephone`,`image`,`sexe`,`dateN`,`cin`,`pays`,`ville`, `codePostale`, `adresse`) VALUES ('$nom', '$prenom', '$email', '$username', '$password', '$telephone','$image','$sexe', '$dateN', '$cin', '$pays', '$ville', '$codePostale', '$addresse')");
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}