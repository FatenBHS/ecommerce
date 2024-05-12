<?php

session_start();

$nom = $_POST['nom'];

$description = $_POST['description'];

$prix = $_POST['prix'];

$createur = $_POST['createur'];

$categorie = $_POST['categorie'];


// upload image
$target_dir = "../../images/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    $image = $_FILES["image"]["name"];
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

$date = date('Y-m-d');

//2 chaine de connexion
include "../../inc/functions.php";
$conn = connect();

try {
    // 3 creation requette
$requette = "INSERT INTO produits(nom,description,prix,image,createur,categorie,date_creation) VALUES ('$nom','$description','$prix','$image','$createur','$categorie','$date')";
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