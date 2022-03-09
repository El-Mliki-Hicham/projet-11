<?php 
session_start();


include "gestionP.php";

$gestion =new GestionP;
if(isset($_GET["del"])){
  $id=$_GET["del"];
  $gestion->supprimer($_GET["del"]);
}


if(isset($_GET["id"])){

    $id = $_GET["id"];

  $data= $gestion->afficherPanier($id);
    foreach($data as $value){

        echo $value->getNom();
        echo $value->getPrix();
        
    }

}

?>
<a href="panier.php?del=<?= $value->getId();?>">del</a>
