<?php

function connect (){

    // connexion vers BD
    $servername="localhost";
    $DBuser = "root";
    $DBpassword = "";
    $DBname = "ecommerce";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$DBname", $DBuser, $DBpassword);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }

      return $conn;

}

function getAllCategories(){
$conn = connect ();



// creation de la requette

$requette =" SELECT * FROM categories";

// execution de la requette

$resultat = $conn->query($requette);

// resultat de la requette
$categories = $resultat->fetchAll();

//var_dump($categorie);

return $categories;


}

function getAllProducts(){

  // connexion vers BD
  $conn = connect ();

// creation de la requette

$requette =" SELECT * FROM produits";

// execution de la requette

$resultat = $conn->query($requette);

// resultat de la requette
$produits = $resultat->fetchAll();

//var_dump($produits);

return $produits;

}


function searchProduits ($keywords){

$conn = connect ();

  //creation de la requette research

  $requette ="SELECT * FROM produits WHERE nom LIKE '%$keywords%' ";

  //execution de la requette

  $resultat = $conn ->query ($requette);
  
  //resultat

  $produits = $resultat->fetchAll();

  return $produits;

}

function getProduitById ($id){

  $conn = connect();

  $requette = "SELECT * FROM produits WHERE id=$id";
 
      //execution de la requette

  $resultat = $conn ->query ($requette);
  
  //resultat

  $produit = $resultat->fetch();

  return $produit;

}


function AddVisiteur($data){

  $conn = connect();
  $mphash = md5($data['mp']);
  $requette =" INSERT INTO visiteurs (nom,prenom,email,mp,telephone) VALUES('".$data['nom']."','".$data['prenom']."','".$data['email']."','".$mphash."','".$data['telephone']."') ";
  $resultat = $conn->query($requette);

  if ($resultat){
    return true;
  }else{
    return false;
  }
}

function ConnectVisiteur($data){
  
  $conn = connect();
  $email = $data['email'];

  $mp = md5($data['mp']);
  $requette = "SELECT * FROM visiteurs WHERE email='$email' AND mp='$mp'";
  $resultat = $conn->query($requette);
  $user = $resultat->fetch();
 
  return $user;

}

function ConnectAdmin($data){

  $conn = connect();
  $email = $data['email'];

  $mp = md5($data['mp']);
  $requette = "SELECT * FROM administrateur WHERE email='$email' AND mp='$mp'";
  $resultat = $conn->query($requette);
  $user = $resultat->fetch();
 
  return $user;

}
function getAllUsers(){
  $conn = connect ();
  $requette = "SELECT * FROM visiteurs WHERE etat=0";
  $resultat = $conn->query($requette);
  $user = $resultat->fetchAll();
  return $user;
}

?>