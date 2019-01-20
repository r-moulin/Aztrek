<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$nom = $_POST['nom'];
$soustitre = $_POST['soustitre'];
$description = $_POST['description'];

insertPays($nom,$description,$soustitre);

header('Location: index.php');
