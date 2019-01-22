<?php
require_once '../../../security.php';
require_once '../../../../model/database.php';

$libelle = $_POST['libelle'];

insertDifficulte($libelle);


header('Location: index.php');