<?php  


include 'gestionPanier.php';


if(isset($_GET["id"])){
$id=$_GET["id"];

}
$gestion = new GestionP();
$data = $gestion->afficherProduit($id);

foreach($data as $value){

    echo $value->getNom();
    echo $value->getPrix();
    
}
?>

<form action="ajouter.php" method="POST">
<p>
<label for=""> Quntite</label>
<input type="number" name="qnt" value="1">
</p>
<p>
<input type="hidden" name="id" value="<?=  $value->getId() ?>">
<button type="submit">ajouter au panier</button>
</p>
</form>
