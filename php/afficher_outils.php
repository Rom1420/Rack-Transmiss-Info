<?php

include('connexion.php');

$sql = 'SELECT nom_outil, desc_outil, etat_outil,chemin_image FROM outils';
$resultat = $pdo->query($sql);

if ($resultat) {

    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="product">';
        echo '<img src="' . htmlspecialchars($row['chemin_image']) . '">';
        echo '<div class="product-text">';
        echo '<h2>' . htmlspecialchars($row['nom_outil']) . '</h2>';
        echo '<p class="desc">' . htmlspecialchars($row['desc_outil']) . '</p>';
        echo '<div class="etat-container">';
        
        if ($row['etat_outil'] == 'indisponible') {
            $etat = ' indispo';
        } elseif ($row['etat_outil'] == 'incomplet') {
            $etat = ' incomplet';
        } else {
            $etat = ' dispo';
        }
        $etatClass = 'etat' . $etat;

        echo '<p class="etat">' . htmlspecialchars($row['etat_outil']) . '</p>';
        echo '<div class="indicator' . strtolower($etat) . '"></div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {

    echo 'Erreur lors de l\'exécution de la requête.';
}

$pdo = null;
?>