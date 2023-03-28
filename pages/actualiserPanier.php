<?php

if(isset($_GET['IDv2'])){
    $sql = "UPDATE panier SET Quantity = Quantity + 1  WHERE ID = $_GET[IDv2]";
    $query = $dbh->prepare($sql);
    $query->execute();
    $result = $query->fetch();

    redirectNotification("Cart Updated !", $routes['panier']);  
}

if(isset($_GET['IDv1'])){
    $sql = "UPDATE panier SET Quantity = Quantity - 1  WHERE ID = $_GET[IDv1]";
    $query = $dbh->prepare($sql);
    $query->execute();
    $result = $query->fetch();

    redirectNotification("Cart Updated !", $routes['panier']);
}

if(isset($_GET['IDv1'])){
    $sql = "SELECT Quantity FROM panier WHERE ID = $_GET[IDv1]";
    $query = $dbh->prepare($sql);
    $query->execute();
    $result = $query->fetch();

    $sql1 = "SELECT Price FROM panier WHERE ID = $_GET[IDv1]";
    $query1 = $dbh->prepare($sql1);
    $query1->execute();
    $result1 = $query1->fetch();

    $quantité = $result[0];
    $prix = $result1[0];

    $sql = "UPDATE panier SET total = $prix * $quantité WHERE ID = $_GET[IDv1]";
    $query = $dbh->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(); 

    var_dump($result);
}

if(isset($_GET['IDv2'])){
    $sql = "SELECT Quantity FROM panier WHERE ID = $_GET[IDv2]";
    $query = $dbh->prepare($sql);
    $query->execute();
    $result = $query->fetch();

    $sql1 = "SELECT Price FROM panier WHERE ID = $_GET[IDv2]";
    $query1 = $dbh->prepare($sql1);
    $query1->execute();
    $result1 = $query1->fetch();

    $quantité = $result[0];
    $prix = $result1[0];

    $sql = "UPDATE panier SET total = $prix * $quantité WHERE ID = $_GET[IDv2]";
    $query = $dbh->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(); 

    var_dump($result);
}




    

    


    