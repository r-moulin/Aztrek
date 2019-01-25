<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$depart = $_POST['depart'];
$prix = $_POST['prix'];
$sejour_id = $_POST['sejour_id'];

insertDepart($depart,$prix,$sejour_id);


header('Location: index.php');