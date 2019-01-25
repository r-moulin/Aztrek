
<?php
require_once "model/database.php";
require_once "functions.php";
$user = getCurrentUser();

$user_id = $user["id"];
$nbr_personne = $_POST["nbr_participants"];
$depart_id = $_GET["id"];

$result =insertResa($depart_id,$user_id,$nbr_personne);

if($result) {
    header('Location: accueil.php/');
}else
    header('Location: thanks.php' );