<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$titre = $_POST['titre'];
$pays_id = $_POST['pays_id'];
$description = $_POST['description'];
$places = $_POST['places'];
$duree = $_POST['duree'];
$guide_id= $_POST['guide_id'];
$difficulte_id= $_POST['difficulte'];
$pays= $_POST['pays_id'];
$publie = ($_POST['publie']== "on") ? 1 : 0;
$a_la_une = ($_POST['a_la_une']== "on") ? 1 : 0;

// Upload de l'image
$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $filename);

insertSejour($titre, $description, $places,$a_la_une,$duree,$publie,$guide_id,$difficulte_id,$pays_id);


header('Location: index.php');