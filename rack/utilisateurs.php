<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
        <title>Accueil</title>
    </head>
    <body>

        <header class="header">
            
            <a href="home.html" class="logo"><img src="../img/logo.png"></a>

            <nav class="navbar">
                <a href="home.html">Acceuil</a>
                <a href="pickup.php">Pick up</a>
                <a href="utilisateurs.php">Utilisateurs</a>
            </nav>
            <div class="clock-container">
                <div class="digital-clock" id="digital-clock"></div>
            </div>
        </header>
        <div class="tableau">
            <p id="accès">
                Derniers accès:
            </p>
            <table border=1>
                <tr>
                    <td>Utilisateur</td>
                    <td>Nombre objets</td>
                    <td>Date et heure</td>
                    <td>Nom objet</td>
                </tr>
                <?php include('../php/afficher_utilisateurs.php'); ?>
            </table>
        </div>
        <script src="../js/JSProjet.js"></script>
    </body>
</html>