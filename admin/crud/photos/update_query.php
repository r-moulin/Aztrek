<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$nom = $_POST['nom'];
$sous_titre = $_POST['sous_titre'];
$description = $_POST['description'];

updatePays($id, $nom,$description,$sous_titre);

header('Location: index.php');
