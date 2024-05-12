<?php
session_start();
include "inc/functions.php";

$categories = getAllCategories();

if (!empty($_POST)) { //button search clicked
    $produits = searchProduits($_POST['search']);
} else {
    $produits = getAllProducts();
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
    <link rel="stylesheet" href="styles.css"> <!-- Your custom CSS file -->
</head>

<body>

    <header class="header">
        <div class="container">
            <h1>E-SHOP</h1>
            <!-- Navigation Links -->
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container mt-4">
        <div class="row">
            <?php foreach ($produits as $produit) : ?>
                <div class="col-md-3">
                    <div class="card">
                        <img src="images/<?php echo $produit['image']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $produit['nom']; ?></h5>
                            <p class="card-text"><?php echo $produit['description']; ?></p>
                            <a href="produit.php?id=<?php echo $produit['id']; ?>" class="btn btn-primary">Afficher Produit</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 E-SHOP. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
