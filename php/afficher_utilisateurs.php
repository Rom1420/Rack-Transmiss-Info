<?php

include('connexion.php');

$sql = "SELECT nom_utilisateur, count(id_emprunt) AS 'Nombre_d_emprunts', date_emprunt, nom_outil 
FROM `emprunts` 
JOIN utilisateurs using(id_utilisateur)
JOIN outils using(id_outil)
WHERE outils.etat_outil = 'indisponible'";
$resultat = $pdo->query($sql);

if ($resultat) {

    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['nom_utilisateur']) .'</td>';
        echo '<td>' . htmlspecialchars($row["Nombre_d_emprunts"]) .'</td>';
        echo '<td>' . htmlspecialchars($row['date_emprunt']) .'</td>';
        echo '<td>' . htmlspecialchars($row['nom_outil']) .'</td>';
        echo '<tr>';
    }
} else {

    echo 'Erreur lors de l\'exécution de la requête.';
}

$pdo = null;
?>