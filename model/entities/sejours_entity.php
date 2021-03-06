<?php
function getAllSejours(int $limit = 999): array
{
    global $connection;

    $query = "
            SELECT 
                    sejour.* ,
                    pays.nom AS pays,
                    guide.nom AS guide,
                    difficulte.libelle AS difficulte
                
            FROM sejour
            LEFT JOIN   pays  on sejour.pays_id = pays.id
            LEFT JOIN guide on sejour.guide_id = guide.id
            LEFT JOIN difficulte on sejour.difficulte_id = difficulte.id
            GROUP BY sejour.id
            LIMIT $limit
            ";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}
function getAllSejoursByPays(string $id): array
{
    global $connection;

    $query = "
            SELECT 
                    sejour.* ,
                    pays.nom AS pays,
                    guide.nom AS guide,
                    difficulte.libelle AS difficulte
                
            FROM sejour
            LEFT JOIN   pays  on sejour.pays_id = pays.id
            LEFT JOIN guide on sejour.guide_id = guide.id
            LEFT JOIN difficulte on sejour.difficulte_id = difficulte.id
            WHERE sejour.pays_id = :id


            ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllSejoursTop(): array {
    global $connection;

    $query = "
            SELECT 
                    sejour.* ,
                    pays.nom AS pays,
                    guide.nom AS guide,
                    difficulte.libelle AS difficulte
                
            FROM sejour
            LEFT JOIN   pays  on sejour.pays_id = pays.id
            LEFT JOIN guide on sejour.guide_id = guide.id
            LEFT JOIN difficulte on sejour.difficulte_id = difficulte.id
            WHERE sejour.a_la_une = 1
            GROUP BY sejour.id
LIMIT 3
            ";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}
function getOneSejour(int $id): array
{
    global $connection;

    $query = "
            SELECT 
                    sejour.* ,
                    pays.nom AS pays,
                    guide.nom AS guide,
                    difficulte.libelle AS difficulte,
                    MIN(depart.prix) AS prix
                
            FROM sejour
            INNER JOIN pays  on sejour.pays_id = pays.id
            INNER JOIN guide on sejour.guide_id = guide.id
            INNER JOIN difficulte on sejour.difficulte_id = difficulte.id
            INNER JOIN depart on sejour.id = depart.sejour_id
            WHERE sejour.id = :id
            GROUP BY sejour.id
            ";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();

}

function insertSejour(string $nom, string $description, string $filename, int $places, int $a_la_une, int $duree, int $publie, int $guide_id, int $difficulte_id, int $pays_id)
{
    global $connection;

    $query = "
    INSERT INTO sejour (nom, description,image, places, a_la_une, duree, publie,guide_id,difficulte_id , pays_id) 
    VALUES (:nom, :description,:image, :places, :a_la_une, :duree, :publie,:guide, :difficulte, :pays_id)

    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":image", $filename);
    $stmt->bindParam(":places", $places);
    $stmt->bindParam(":a_la_une", $a_la_une);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":publie", $publie);
    $stmt->bindParam(":guide", $guide_id);
    $stmt->bindParam(":difficulte", $difficulte_id);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->execute();
}

function updateSejour(int $id, string $nom, string $description,string $filename,int $places, int $a_la_une, int $duree, int $publie, int $guide_id, int $difficulte_id, int $pays_id)
{
    global $connection;
    $query = "UPDATE sejour SET nom = :nom, description = :description, image = :image, places= :places,a_la_une= :a_la_une,duree= :duree,publie= :publie,guide_id= :guide_id,difficulte_id= :difficulte_id,pays_id= :pays_id  WHERE id= :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":image", $filename);
    $stmt->bindParam(":places", $places);
    $stmt->bindParam(":a_la_une", $a_la_une);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":publie", $publie);
    $stmt->bindParam(":guide_id", $guide_id);
    $stmt->bindParam(":difficulte_id", $difficulte_id);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->execute();
}

