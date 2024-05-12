<?php

include"inc/functions.php";

$categories = getAllCategories();

if (isset ($_GET['id']) ){

   $produit = getProduitById($_GET['id']);

}

?>



<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-SHOP</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>

      <?php
       include "inc/header.php";
          
      ?>
 

<div class="row col-12 mt-4">

<div class="card col-8 offset-2" >
  <img src="images/<?php echo $produit['image']  ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $produit['nom']  ?></h5>
    <p class="card-text"><?php echo $produit['description']  ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?php echo $produit['prix']  ?> TND</li>

    <?php
       foreach($categories as $index => $c){
         if ($c['id'] == $produit['categorie']){
          print ' <button class="btn btn-success mb-2">'. $c['nom'].'</button>'; 
         }
       }
    ?>
   
 
  </ul>

</div>    

</div>

<?php
include "inc/footer.php";
?>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>