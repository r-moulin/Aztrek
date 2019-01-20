<?php
function getUtilisateurByEmailMotDePasse(string $email, string $password) {
    global $connection;
    $query = "
                SELECT *
                FROM user
                WHERE email= :email
                AND   mdp = :password";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password",$password);
    $stmt->execute();

    return $stmt->fetch();
}