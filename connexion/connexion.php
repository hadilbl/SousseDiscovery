<?php
require_once("database.php");
require_once("scanne.php");
require_once("sign_upfct.php");
require_once("destinationfct.php");
require_once("hebergementfct.php");
require_once("userfct.php");
require_once("feedbackfct.php");
require_once("reservationfct.php");
require_once("contactfct.php");





$database = new database();
$scanne = new scanne($database->getConnectionDB());
$signupfct = new signupfct($database->getConnectionDB());
$destinationfct= new destinationfct($database->getConnectionDB());
$hebergementfct= new hebergementfct($database->getConnectionDB());
$userfct= new userfct($database->getConnectionDB());
$feedbackfct= new feedbackfct($database->getConnectionDB());
$reservationfct= new reservationfct($database->getConnectionDB());
$contactfct= new contactfct($database->getConnectionDB());


?>