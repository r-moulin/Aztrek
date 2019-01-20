<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$nom = $_POST['nom'];
$biographie = $_POST['biographie'];
if ($_FILES["image"]["error"] == 0) {
    $filename = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp, "../../../uploads/team/" . $filename);
} else {
    // Aucun fichier uploadé
    $filename = $guide["image"];
}

updateTeam($id, $nom,$biographie,$filename);

header('Location: index.php');