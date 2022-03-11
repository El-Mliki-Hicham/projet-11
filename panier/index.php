
<?php 
include 'gestionPanier.php';
$gestion =new GestionP();
$data=$gestion->afficher();

foreach($data as $value){


   

?>

<div>
<table border="1" width="20%">
<tr>

<td><a href="afficher.php?id=<?= $value->getId();?>"><?= $value->getNom();?></a> </td>
</tr>




</table>

</div>


<?php } ?>

<a href="panier.php">panier</a>
