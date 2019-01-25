<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$depart = getOneSejour($id, false);

$depart = $_POST['depart'];
$prix = $_POST['prix'];

updateDepart($id, $depart,$prix);

header('Location: ../sejour/index.php');
