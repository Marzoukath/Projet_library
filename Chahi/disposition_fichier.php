<?php
// Paramètres de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "digital_library";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérer les données du formulaire
$matricule = $_POST['matricule'];
$description = $_POST['description'];

// Préparer et exécuter la requête d'insertion
$sql = "INSERT INTO request (matricule, description) VALUES ('$matricule', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "Requête enregistrée.";
} else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
}

// Fermer la connexion
$conn->close();
?>
