<?php
var_dump($_SESSION);
include "gestionP.php";
include 'classes.php';
$panier=new Panier;
$gestion =new GestionP();


if (isset($_GET["id"])){
   $id= $_GET["id"];
    $data=$gestion->afficherPanier($id);
    foreach($data as $value){
   $produit_id  =   $value->getId();
}
$panier->add($produit_id) ;

}