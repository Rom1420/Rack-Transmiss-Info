<?php
$host = "localhost";
$port = "5432";
$dbname = "Rack";
$user = "postgres";
$password = "password";

$connexion = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$connexion) {
    die("La connexion a échoué");
}
echo "Connexion réussie";
?>