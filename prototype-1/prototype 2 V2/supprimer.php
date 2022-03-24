<?php
session_start();
include 'gestionPanier.php';
include 'class-panier.php';
$gestion = new GestionP ;
$panier = new Panier('produits');


$panier->delete( $_GET["id"]);
header('location:panier.php');