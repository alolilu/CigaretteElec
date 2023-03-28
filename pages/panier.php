<?php

use ScssPhp\ScssPhp\Value\Value;

include "functions/panier.php" ?>
<?php include "pages/actualiserPanier.php" ?>

<div class="container-fluid titrePanier">
    <h1>YOUR CART</h1>
</div>

<div class="container panier">
    <?php if(!empty($resultPanier)){  ?>
        <?php foreach ($resultPanier as $resultPaniers) { ?> 
            <div class="container produitPanier">
                <div class="col-md-2 panierPartie">
                    <img src="<?= $resultPaniers->Image ?>" id="imagePanierPorduit" alt="">
                </div>
                <div class="col-md-4 panierPartie">
                    <h6><?= $resultPaniers->Name ?></h6>
                </div>
                <div class="col-md-2 panierPartie">
                    <p><?= $resultPaniers->Price ?>€</p>
                </div>
                <div class="col-md-2 panierPartie">
                    <p>Quantity :</p>
                    <form method="POST">
                        <div class="compteur">
                            <a style="margin: 0px;" id="plus" href="actualiserPanier?IDv1=<?= $resultPaniers->ID ?>"><i class="fas fa-minus"></i></a>
                            <div id="number"><?= $resultPaniers->Quantity ?></div>
                            <a style="margin: 0px;" id="plus" href="actualiserPanier?IDv2=<?= $resultPaniers->ID ?>"><i class="fas fa-plus"></i></a>
                        </div>
                    </form>
                    <form method="POST" name="supprimerDuPanier">
                    <?php include "pages/supprimerdupanier.php" ?>
                        <a name="supppanier" href="panier?id=<?= $resultPaniers->ID ?>">Delete</a>
                    </form>
                </div>
                <div class="col-md-2 panierPartie">
                    <p>Total :<?= $resultPaniers->total ?>€</p> 
                </div>  
            </div>
        <?php } ?>  
        <div class="container totalpanier">
            <div class="row totalpanierrow">
                <div class="col-md-4 md">
                    <h6 style="margin-left: 25px;">Summary Of Your Cart :</h6>
                </div>
                <div class="col-md-4 md">
                    <h6 style="margin-right: 25px;">Total of your cart : <?= $result->t ?>  €</h6> 
                </div>
                <div class="col-md-4 md">
                    <a class="payeea" href="<?=$routes['payement']?>">Payement using Stripe</a>
                </div>
            </div>
        </div>
        <div class="panierContenu1">
            <h6>You are not finished ? For more products it is <a name="home" href="<?=$routes['home']?>">Here</a></h6>
        </div>     
    <?php }else{ ?>
        <div class="panierContenu">
            <img src="assets/image/panier-vide.png" id="paniervideimg" alt="">
        </div>
        <div class="panierContenu1">
            <h6>Don't be worry we have a lot of product <a name="home" href="<?=$routes['home']?>">Here</a></h6>
        </div>
    <?php } ?>
</div>


 