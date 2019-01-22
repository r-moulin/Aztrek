<?php
function insertDepart(string $depart, string $prix, string $sejour_id) {
    global $connection;

    $query = " INSERT INTO depart (depart, prix, sejour_id) Values (:depart,:prix,:sejour_id)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":depart", $depart);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":sejour_id", $sejour_id);
    $stmt->execute();

}