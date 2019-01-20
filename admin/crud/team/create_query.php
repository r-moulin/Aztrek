<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$nom = $_POST['nom'];
$biographie = $_POST['biographie'];

// Upload de l'image
$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/team/" . $filename);

insertTeam($nom, $biographie, $filename);

header('Location: index.php');
