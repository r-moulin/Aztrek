<?php
require_once '../../security.php';
require_once '../../../model/database.php';
require_once '../../../functions.php';


$id = $_POST['id'];
$id_sejour = $_POST['id_sejour'];
$jour = $_POST['jour'];
$etapes = $_POST['etapes'];
$description = $_POST['description'];

updateProg($id, $jour,$etapes,$description,$id_sejour);

header('Location: prog.php?id='.$id_sejour);
