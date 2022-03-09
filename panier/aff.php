<?php 
var_dump($_SESSION);
include "gestionP.php";
include 'classes.php';
$panier=new Panier;
$gestion =new GestionP();
$data=$gestion->afficher();

foreach($data as $value){


   

?>

<div>
<?= $value->getId();?> 
<?= $value->getNom();?> 
<a href="">
    <?= $value->getPrix();?>
</a>
<a href="add.php?id=<?= $value->getId();?>">add</a>
</div>


<?php } ?>
