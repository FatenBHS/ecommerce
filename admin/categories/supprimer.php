<?php

   //echo "Id du categorie".$_GET['idc'];


   $idcategorie = $_GET['idc'];

   include "../../inc/functions.php";

   $conn = connect();

   $requette = "DELETE FROM categories WHERE id='$idcategorie'";

   $resultat = $conn->query($requette);

   if ($resultat){
  //  echo "Categorie supprimée";
      header('location:liste.php?delete=ok');
   }

?>