<?php include "functions/afficherProduitEliquid.php" ?>

<div class="container-fluid hautHome">
    <div class="container">
        <div class="row rowhome">
            <div class="col-md-3 colicon"><i class="fas fa-truck-moving"></i>FREE SHIPPING</div>
            <div class="col-md-3 colicon"><i class="fas fa-gift"></i>GIFTS OF YOUR CHOICE</div>
            <div class="col-md-3 colicon"><i class="fas fa-box-open"></i>SHIPPED THE SAME DAY</div>
            <div class="col-md-3 colicon"><i class="fab fa-cc-visa"></i>PAY BY CARD</div>
        </div>
    </div>
</div>

<div class="container-fluid titre">
    <h1>All our E-liquids</h1>
    <div class="container recherche1">
        <div class="row recherche">
            <form class="col-md-5 rechercheleft" method="POST">
                <select name="trierPar" id="">
                    <option disabled selected value>Filter by</option>
                    <option value="mostPopural">The most popular</option>
                    <option value="lessPopular">The less popular</option>
                    <option value="decreasing">decreasing</option>
                    <option value="increasing">increasing</option>
                </select>
                <button style="background-color: white; color: black; padding: 5px 8px; font-size: 1vh; margin-left: 7px; font-weight: 600;" type="submit">Research</button>
                <?php if (!isset($_POST['trierPar'])) { ?>
                        
                <?php } ?>
            </form>
            <form class="col-md-7 rechercheright" method="POST">
                <i class='fas fa-search'></i>
                <input name="search" type="text" placeholder=" research..">
                    <?php if (!isset($_POST['search'])) { ?>
                        
                    <?php } ?>
            </form>
        </div>
    </div>    
</div>

<div class="container-xxl product">
    <div class="row productRow">
        <?php foreach ($result as $data) { ?>
            <div class="col-md-3">
                <div class="ficheProduct">
                    <div class="ficheProduct1">
                        <i class="fas fa-shopping-cart">
                            <a name="AddToCart" href="panier?ID=<?= $data->ID ?>">Add to cart</a>
                        </i>
                    </div>
                    <h3><?= $data-> Name ?></h3>
                    <img src="<?= $data-> Image ?>" alt="">
                    <p><?= $data-> Description ?></p>
                    <h6>Prix : <?= $data-> Price ?>€</h6>
                    <h6 style="font-size: 2vh; color: orange">
                        <?php if($data-> Popular == 0) { ?>
                            <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                        <?php } elseif($data-> Popular == 1) { ?>
                            <i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                        <?php } elseif($data-> Popular == 2) { ?>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                        <?php } elseif($data-> Popular == 3) { ?>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                        <?php } elseif($data-> Popular == 4) { ?>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                            <?php } elseif($data-> Popular == 5) { ?>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>                      
                        <?php } ?>
                    </h6>
                </div>
            </div>
        <?php } ?>
    </div>
</div>