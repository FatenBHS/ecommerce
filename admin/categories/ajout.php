<?php

session_start();

//recuperation des données du formulaire
$nom = $_POST ['nom'];
$description = $_POST ['description'];
$createur = $_SESSION ['id'];
$date_creation = date("Y-m-d");


//2 chaine de connexion
include "../../inc/functions.php";
$conn = connect();

try {
    // 3 creation requette
$requette = "INSERT INTO categories(nom,description,createur,date_creation) VALUES ('$nom','$description','$createur','$date_creation')";
//execution requette
$resultat = $conn->query($requette);
if ($resultat){
    header('location:liste.php?ajout=ok');
}
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    if ($e->getcode() == 23000) {
        header('location:liste.php?erreur=duplicate');
       }

  }
?>