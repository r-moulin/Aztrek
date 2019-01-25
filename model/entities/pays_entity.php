<?php
function insertPays(string $nom, string $description,string $description_courte, string $soustitre,string $image) {
    global $connection;

    $query = " INSERT INTO pays (nom, description,description_courte, sous_titre, image) Values (:nom,:description,:description_courte, :soustitre,:image)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":soustitre", $soustitre);
    $stmt->execute();

}

function updatePays (int $id,string $nom,string $description,string $description_courte, string $sous_titre, string  $image) {
    global $connection;
    $query = "UPDATE pays SET nom = :nom, description = :description,description_courte = :description_courte, sous_titre = :sous_titre, image = :image WHERE id= :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":description_courte", $description_courte);
    $stmt->bindParam(":sous_titre", $sous_titre);
    $stmt->execute();
}

function getAllPays (): array {
    global $connection;
    $query = "SELECT *,
              COUNT(pays.id) AS total_pays
              FROM pays" ;

    $stmt = $connection->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}