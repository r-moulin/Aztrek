<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST['id'];
$id_sejour = $_POST['id_sejour'];

$error = deleteEntity("depart_has_user", $id);

if ($error) {
    header('Location: index.php?errcode=' . $error->getCode());
    exit;
}

header('Location: resa.php?id='.$id_sejour);
