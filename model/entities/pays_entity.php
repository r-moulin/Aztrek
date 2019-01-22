<?php
function insertPays(string $nom, string $description, string $soustitre,string $image) {
    global $connection;

    $query = " INSERT INTO pays (nom, description, sous_titre, image) Values (:nom,:description,:soustitre,:image)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":soustitre", $soustitre);
    $stmt->execute();

}

function updatePays (int $id,string $nom,string $description, string $sous_titre, string  $image) {
    global $connection;
    $query = "UPDATE pays SET nom = :nom, description = :description, sous_titre = :sous_titre image = :image WHERE id= :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":image", $image);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":sous_titre", $sous_titre);
    $stmt->execute();
}