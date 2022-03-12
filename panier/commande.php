<?php
session_start();
include 'class/gestionPanier.php';
include 'class/class-panier.php';
$gestion = new GestionP ;
$panier = new Panier('produits');

// print_r($_SESSION['produits']);
print_r($_SESSION['paniers']['produits']);


$listProduits=$panier->getPanier();
foreach($listProduits as $value){



?>

<?php  ?>

    <p><?php echo $value["prix"]*$value["qnt"]; } ?></p>

