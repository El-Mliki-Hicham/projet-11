<?php
session_start();
include 'gestionPanier.php';
include 'class-panier.php';
$gestion = new GestionP ;
$panier = new Panier('produits');






$id=$_POST['id'];


$data = $gestion->afficherPanier($id);

foreach($data as $value);


$valeurs = array(
    "nom" => $value->getNom(),
    'prix' => $value->getPrix(),
    'qnt' => $_POST["qnt"] ,
    'id' => $value->getId(),
);
$panier->set( $_POST["id"], $valeurs);


header("location: panier.php");


