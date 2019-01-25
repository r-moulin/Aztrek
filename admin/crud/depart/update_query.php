<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];

$depart = $_POST['depart'];
$prix = $_POST['prix'];
$sejour_id = $_POST['sejour_id'];

updateDepart($id, $depart,$prix,$sejour_id);

header('Location: index.php');
