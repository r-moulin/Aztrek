<?php
function insertPays(string $nom, string $description, string $soustitre) {
    global $connection;

    $query = " INSERT INTO pays (nom, description, sous_titre) Values (:nom,:description,:soustitre)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":soustitre", $soustitre);
    $stmt->execute();

}

function updatePays (int $id,string $nom,string $description, string $sous_titre) {
    global $connection;
    $query = "UPDATE pays SET nom = :nom, description = :description, sous_titre = :sous_titre  WHERE id= :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":sous_titre", $sous_titre);
    $stmt->execute();
}