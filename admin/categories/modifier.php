<?php

session_start();

//recuperation des données du formulaire
$id = $_POST['idc'];
$nom = $_POST ['nom'];
$description = $_POST ['description'];
$date_modification = date("Y-m-d");


//2 chaine de connexion

include "../../inc/functions.php";
$conn = connect();



// 3 creation requette

$requette = "UPDATE categories SET nom='$nom', description='$description', date_modification='$date_modification' WHERE  id='$id' ";

//execution requette

$resultat = $conn->query($requette);

if ($resultat){
    header('location:liste.php?modif=ok');
}


?>