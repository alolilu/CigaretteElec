<?php session_start() ?>
  <nav class="navbar">
    <div class="FirstNavbar">
      <p>SALES: Attractive prices on hundreds of references !</p>
    </div>
    <div class="SecondNavbar">
      <div class="row" style="margin: 0px;">
        <div class="col-8 gauche">
          <img src="assets/image/logo.png" id="logo" alt="">
          <a name="home" href="<?=$routes['home']?>">Home</a>
          <a href="<?=$routes['matieriel']?>">Vape</a>
          <a href="<?=$routes['eliquide']?>">Liquids</a>
          <a href="<?=$routes['accessoires']?>">Accessories</a>
        </div>
        <div class="col-4 droite">
          <?php if (isset($_SESSION['isLogged'])){ ?>
            <?php echo "<p>$_SESSION[isLogged]</p>" ?>
            <?php include "functions/logout.php" ?>
            <form method="POST">  
              <a href="<?=$routes['panier']?>">Cart</a>
              <button class="btnLogout" name="logout" type="submit">Logout</button> 
            </form> 
          <?php } else { ?>
            <a href="<?=$routes['login']?>" id="DoubleBtn1">Login</a>
            <a href="<?=$routes['register']?>" id="DoubleBtn2">Register</a>
          <?php } ?>         
        </div>
      </div>
    </div>                        
  </nav>

                  

    
    