<?php
require_once "model/database.php";

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$mdp = $_POST["mdp"];

$result =insertUser($nom,$prenom,$email,$mdp);

if($result) {
    header('Location: admin/');
}else
    header('Location: create_account.php');

