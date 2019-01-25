<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$pays = getOneSejour($id);

$nom = $_POST['nom'];
$sous_titre = $_POST['sous_titre'];
$description = $_POST['description'];
$description_courte = $_POST['description_courte'];

// Upload de l'image
if ($_FILES["image"]["error"] == 0) {
    $filename = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp, "../../../uploads/" . $filename);
} else {
    // Aucun fichier uploadé
    $filename = $pays["image"];
}

updatePays($id, $nom,$description,$description_courte,$sous_titre,$filename);

header('Location: index.php');
