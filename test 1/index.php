
<?php 
include 'gestionPanier.php';
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
<a href="afficher.php?id=<?= $value->getId();?>">add</a>
</div>


<?php } ?>