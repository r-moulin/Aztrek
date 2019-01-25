<?php
function getAllDepart(int $limit=999) {
    global $connection;

    $query = "Select depart.*,
          DATE_FORMAT(depart.depart,'%d-%m-%Y ' ) AS date_depart,
          DATE_FORMAT(DATE_ADD(depart.depart, INTERVAL sejour.duree DAY), '%d-%m-%Y ') AS date_arrivee_format,
          sejour.nom AS nom,
          sejour.places - SUM(depart_has_user.nbr_personne) AS places
          FROM depart 
          LEFT JOIN sejour ON sejour.id = depart.sejour_id
          LEFT JOIN depart_has_user  on depart.id = depart_has_user.depart_id
          GROUP BY depart.id";


    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}
function getOneDepart (int $id) : array {
    global $connection;
    $query = "SELECT  depart.*,
                      sejour.nom AS sejour,
                      IFNULL((sejour.places - SUM(depart_has_user.nbr_personne)), sejour.places) AS places,
                      DATE_FORMAT(depart.depart,'%d-%m-%Y ' ) AS date_depart,
                      DATE_FORMAT(DATE_ADD(depart.depart, INTERVAL sejour.duree DAY), '%d-%m-%Y ') AS date_arrivee_format
              FROM depart 
              LEFT JOIN sejour on depart.sejour_id = sejour.id
              LEFT JOIN depart_has_user  on depart.id = depart_has_user.depart_id
              WHERE depart.id= :id
              GROUP BY depart.id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetch();
}

function getAllDepartBySejour(string $id): array
{
    global $connection;

    $query = "
            SELECT 
                  depart.*,
                  DATE_FORMAT(depart.depart,'%d-%m-%Y ' ) AS date_depart,
                  DATE_FORMAT(DATE_ADD(depart.depart, INTERVAL sejour.duree DAY), '%d-%m-%Y ') AS date_arrivee_format,
                  sejour.nom AS nom,
                  IFNULL((sejour.places - SUM(depart_has_user.nbr_personne)), sejour.places) AS places
                
            FROM depart
            LEFT JOIN   sejour on depart.sejour_id = sejour.id
            LEFT JOIN depart_has_user  on depart.id = depart_has_user.depart_id
            WHERE sejour.id= :id
            GROUP BY depart.id
            
            ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}
function insertDepart(string $depart, string $prix, string $sejour_id) {
    global $connection;

    $query = " INSERT INTO depart (depart, prix, sejour_id) Values (:depart,:prix,:sejour_id)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":depart", $depart);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":sejour_id", $sejour_id);
    $stmt->execute();

}
function updateDepart(int $id,string $depart, int $prix,int $sejour_id) {
    global $connection;
    $query = "UPDATE depart SET depart = :depart, prix = :prix, sejour_id = :sejour_id WHERE id= :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":depart", $depart);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":sejour_id", $sejour_id);
    $stmt->execute();
}