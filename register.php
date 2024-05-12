<?php


session_start();

if (isset($_SESSION['nom'])) {
    header('location:profile.php');
}


include"inc/functions.php";
$showRegistrationAlert = 0;
$categories = getAllCategories();

if (!empty ($_POST)){ //click on button submit

 if (AddVisiteur($_POST)){
  $showRegistrationAlert = 1;
 }

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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.31/sweetalert2.css">
      </head>
    <body>
    <?php
       include "inc/header.php";
          
      ?>


             <!-- end NAV -->
    <div class="col-12 p-5">
        <h1 class="text-center"> Register </h1>
        <form action="register.php" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name ="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Nom</label>
              <input type="text" name="nom" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Prénom</label>
                <input type="text" name="prenom"  class="form-control" id="exampleInputPassword1">
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Téléphone</label>
                <input type="text" name="telephone"  class="form-control" id="exampleInputPassword1">
              </div>

              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="mp" class="form-control" id="exampleInputPassword1">
              </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

    </div>

          <!-- footer -->
          <?php
             include "inc/footer.php";
          ?>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.31/sweetalert2.all.min.js"></script>
    <?php 
  if ( $showRegistrationAlert == 1){
    print "
    <script>
    Swal.fire ('Congrats you created a new account')
      </script>
    ";  
      
  }

    ?>
   
    </html>