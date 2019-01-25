<?php
function getAllProgBySejour(string $id): array
{
    global $connection;

    $query = "
            SELECT 
                  programme.*,
                  sejour.nom AS nom
            FROM programme
            LEFT JOIN sejour on programme.sejour_id = sejour.id
            WHERE sejour_id= :id
            GROUP BY programme.id
            ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function insertProg(int $sejour_id,int $jour,string $etapes,string $description) :array {
    global $connection;

    $query = " INSERT INTO programme (jour, etapes, description, sejour_id) Values (:jour, :etapes, :description, :sejour_id)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":jour", $jour);
    $stmt->bindParam(":etapes", $etapes);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":sejour_id", $sejour_id);
    $stmt->execute();

}

function updateProg (int $id,int $jour,string $etapes,string $description,int $id_sejour) : array {
    global $connection;
    $query = "UPDATE programme SET jour = :jour, description = :description, etapes = :etapes, sejour_id = :id_sejour WHERE id= :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":jour", $jour);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":etapes", $etapes);
    $stmt->bindParam(":id_sejour", $id_sejour);
    $stmt->execute();
}