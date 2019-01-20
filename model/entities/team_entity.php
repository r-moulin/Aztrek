<?php
function insertTeam(string $nom, string $biographie, string $image) {
    global $connection;

    $query = " INSERT INTO guide (nom, biographie, image) Values (:nom,:biographie,:image)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":biographie", $biographie);
    $stmt->bindParam(":image", $image);
    $stmt->execute();

}

function updateTeam (int $id,string $nom,string $biographie,string $image) {
    global $connection;
    $query = "UPDATE guide SET nom = :nom, biographie = :biographie, image = :image WHERE id= :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":biographie", $biographie);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
}