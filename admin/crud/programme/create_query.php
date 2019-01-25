<?php
require_once '../../security.php';
require_once '../../../model/database.php';


$sejour_id = $_POST['sejour_id'];
$jour = $_POST['jour'];
$etapes = $_POST['etapes'];
$description = $_POST['description'];

insertProg($sejour_id, $jour, $etapes,$description);

header('Location: prog.php?id='.$sejour_id);
