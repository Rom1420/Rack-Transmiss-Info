<?php

include('connexion.php');

$sql = 'SELECT nom_outil FROM outils';
$resultat = $pdo->query($sql);

if ($resultat) {

    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo $row['nom_outil'] . '<br>';
    }
} else {

    echo 'Erreur lors de l\'exécution de la requête.';
}

$pdo = null;
?>