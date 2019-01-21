<?php
require_once __DIR__ . '/../config/parameters.php';

try {
    $connection = new PDO("mysql:host=" . DB_HOST. ";dbname=". DB_NAME , DB_USER, DB_PASS, [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8', lc_time_names = 'fr_FR';",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
} catch (PDOException $exception) {
    echo "Erreur de connexion à la base de données";
    die;
}

$files = glob(__DIR__ . "/entities/*.php");
foreach ($files as $filepath) {
    require_once $filepath;
}


function getAllEntities (string $table): array {
    global $connection;
    $query = "SELECT * FROM $table";

    $stmt = $connection->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}
function getOneEntity (string $table,int $id) : array {
    global $connection;
    $query = "SELECT * FROM $table WHERE id= :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetch();
}
function deleteEntity (string $table,int $id) {
    global $connection;
    $query = "DELETE FROM $table WHERE id= :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);

    try {
        $stmt->execute();
    } catch ( PDOException $exception) {
        return $exception;
    }
    return null;
}

function insertImage (string $image, int $sejour_id)  {
    global $connection;

    $query = " INSERT INTO image(libelle,sejour_id) VALUES (:image,:sejour) ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":sejour", $sejour_id);
    $stmt->execute();
}
function insertDifficulte (string $libelle)  {
    global $connection;

    $query = " INSERT INTO difficulte(libelle) VALUES (:difficulte) ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":difficulte", $libelle);
    $stmt->execute();
}