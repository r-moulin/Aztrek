<?php


function getAllResaBySejour(int $id) {
    global $connection;

    $query = "
          Select depart_has_user.*,
                 DATE_FORMAT(depart.depart, '%d-%m-%Y') AS date_depart,
                 CONCAT(user.prenom,' ', user.nom) AS user,
                 sejour.nom as sejour
          FROM depart_has_user 
          LEFT JOIN depart on depart.id = depart_has_user.depart_id
          LEFT JOIN user  on depart_has_user.user_id = user.id
          LEFT JOIN sejour on depart.sejour_id = sejour.id
          WHERE sejour.id = :id
          ";


    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id",$id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function insertResa(int $depart_id,int $user_id,int $nbr_personne){
    global $connection;

    $query = " INSERT INTO depart_has_user (depart_id, user_id, nbr_personne) Values (:depart_id, :user_id,:nbr_personne)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":depart_id", $depart_id);
    $stmt->bindParam(":user_id", $user_id);
    $stmt->bindParam(":nbr_personne", $nbr_personne);
    $stmt->execute();

}