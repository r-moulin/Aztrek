<?php
function getUtilisateurByEmailMotDePasse(string $email, string $password) {
    global $connection;
    $query = "
                SELECT *
                FROM user
                WHERE email= :email
                AND   mdp = SHA1(:password)";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password",$password);
    $stmt->execute();

    return $stmt->fetch();
}

function insertUser (string $nom, string $prenom, string $email, string $mdp) {
    global $connection;
    $query ="INSERT INTO user(nom,prenom,email,mdp,admin) Values (:nom,:prenom,:email,SHA1(:mdp), 0) ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":prenom", $prenom);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":mdp",$mdp);

    return $stmt->execute();


}

