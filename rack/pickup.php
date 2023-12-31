<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/pickupstyle.css">
        <title>Pickup</title>
    </head>
    <body>

        <header class="header">
            
            <a href="home.html" class="logo"><img src="../img/logo.png"></a>

            <nav class="navbar">
                <a href="home.html">Acceuil</a>
                <a href="pickup.php">Pick up</a>
                <a href="utilisateurs.html">Utilisateurs</a>
            </nav>
            <div class="clock-container">
                <div class="digital-clock" id="digital-clock"></div>
            </div>
        </header>
        <h2>Gestion des stocks</h2>
            <section>
                <?php include('../php/afficher_outils.php'); ?>
            </section>
        <script src="../js/JSProjet.js"></script>
    </body>
</html>