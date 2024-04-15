<?php

$srvname = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "eleves"; 

$conn = new mysqli($srvname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
} 

$name = isset($_POST['nom']) ? $_POST['nom'] : '';
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
$datenaissance = isset($_POST['datenaissance']) ? $_POST['datenaissance'] : '';
$genre = isset($_POST['genre']) ? $_POST['genre'] : '';
$classe = isset($_POST['classe']) ? $_POST['classe'] : '';
$diplome = isset($_POST['diplome']) ? $_POST['diplome'] : '';
$telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
$adresse = isset($_POST['adresse']) ? $_POST['adresse'] : '';
$code_postal = isset($_POST['code_postal']) ? $_POST['code_postal'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$ville = isset($_POST['ville']) ? $_POST['ville'] : '';
$pays = isset($_POST['pays']) ? $_POST['pays'] : '';

$sql = "INSERT INTO eleves (nom, prenom, datenaissance, genre, classe, diplome_id, telephone, adresse, code_postal, email, ville, pays) 
        VALUES ('$name', '$prenom', '$datenaissance', '$genre', '$classe', '$diplome', '$telephone', '$adresse', '$code_postal', '$email', '$ville', '$pays')";

if ($conn->query($sql) === TRUE) {
    echo "Nouvel enregistrement créé avec succès !";
} else {
    echo "Erreur lors de la création de l'enregistrement : " . $conn->error;
}

$conn->close();

?>