<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$nom = $_POST['nom'];
$soustitre = $_POST['soustitre'];
$description = $_POST['description'];
$description_courte = $_POST['description_courte'];
// Upload de l'image
$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $filename);

insertPays($nom,$description,$description_courte,$soustitre,$filename);

header('Location: index.php');
