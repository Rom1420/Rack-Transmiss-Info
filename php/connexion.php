<?php
//On stock les données dans la variable dsn (data source name).
$dsn = 'mysql:host=localhost;dbname=rack;charset=utf8';

//Ensuite il faut se connecter au serveur MySQL en renseignant nos informations.
$pdo = new PDO($dsn, 'root' , ''); ?>