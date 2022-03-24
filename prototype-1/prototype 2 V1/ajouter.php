<?php
session_start();
include 'gestionProduit.php';
$gestion = new GestionProduit();






$id=$_POST['id'];


$data = $gestion->afficherProduit($id);

foreach($data as $value);


$valeurs = array(
    "nom" => $value->getNom(),
    'prix' => $value->getPrix(),
    'qnt' => $_POST["qnt"] ,
    'id' => $value->getId(),
);
$gestion->set( $_POST["id"], $valeurs);


header("location: panier.php");


