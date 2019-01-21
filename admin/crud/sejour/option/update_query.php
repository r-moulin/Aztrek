<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$sejour = getOneSejour($id, false);


$nom = $_POST['nom'];
$pays_id = $_POST['pays_id'];
$description = $_POST['description'];
$places = $_POST['places'];
$duree = $_POST['duree'];
$difficulte_id= $_POST['difficulte'];
$guide_id= $_POST['guide_id'];
$publie = ($_POST['publie']== "on") ? 1 : 0;
$a_la_une = ($_POST['a_la_une']== "on") ? 1 : 0;
$pays_id = $_POST['pays_id'];

// Upload de l'image
if ($_FILES["image"]["error"] == 0) {
    $filename = $_FILES["image"]["name"];
    $tmp = $_FILES["image"]["tmp_name"];
    move_uploaded_file($tmp, "../../../uploads/" . $filename);
} else {
    // Aucun fichier uploadé
    $filename = $sejour["image"];
}
updateSejour($id,$nom, $description,$filename, $places,$a_la_une,$duree,$publie,$guide_id,$difficulte_id,$pays_id);

header('Location: index.php');
