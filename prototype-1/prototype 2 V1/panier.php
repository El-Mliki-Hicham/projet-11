<?php 
session_start();

// print_r($_SESSION["paniers"]);

include 'gestionProduit.php';

$panier = new GestionProduit();

$listProduits = $panier->getPanier();


?>


<?php if(!$listProduits){ ?>
    <p>le panier est vide</p>
    <?php }else{ ?>

        <table border="2" width="50%" >
             <tr>
                <th>id</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                
             </tr>
      
        <?php
          foreach($listProduits as $value){
          

            ?>
          
            <tr >
                
                <td><?= $value["id"] ?></td>
                <td><?= $value["nom"] ?></td>
                <td><?= $value["prix"] ?> dh</td>
                <td><?= $value["qnt"] ?></td>
            
              
            </tr> 
            
             
        <?php }} ?>


     </table>

   

     <a href="index.php">back</a>

     <a href="commande/ajoute-commande.php">achter</a>

     