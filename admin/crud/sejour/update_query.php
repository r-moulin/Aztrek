<?php

require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$sejour = getOneSejours($id);


$titre = $_POST['titre'];
$pays_id = $_POST['pays_id'];
$description = $_POST['description'];
$places = $_POST['place'];
$duree = $_POST['duree'];
$difficulte_id= $_POST['difficulte'];
$guide_id= $_POST['guide'];
$publie = ($_POST['publie']== "on") ? 1 : 0;
$a_la_une = ($_POST['a_la_une']== "on") ? 1 : 0;
$pays_id = $_POST['pays_id'];
$tag_ids = isset($_POST['tag_ids']) ? $_POST['tag_ids'] : [];


updateSejour($titre, $description, $places,$a_la_une,$duree,$publie,$guide_id,$difficulte_id,$pays_id);

header('Location: index.php');
