<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$sejour_id = $_POST['sejour_id'];

$filename = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($tmp, "../../../uploads/" . $filename);

insertImage($filename,$sejour_id);

header('Location: index.php');
