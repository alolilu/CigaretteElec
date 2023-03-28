<?php include "functions/afficherProduit.php" ?>

<?php 

    if(isset($_GET['ID'])){
        $Quantity = 1;
        $total = 0;
        $sql = "SELECT Name, Image, Price FROM Products WHERE ID = $_GET[ID]";
        $query = $dbh->prepare($sql);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ); 

        $sql = "INSERT INTO panier (Name, Image, Price, Quantity, total) VALUES (:Name, :Image, :Price, :Quantity, :Price)";
        $query = $dbh->prepare($sql);
        $query->bindParam(":Name", $result->Name , PDO::PARAM_STR);
        $query->bindParam(":Image", $result->Image, PDO::PARAM_STR);
        $query->bindParam(":Price", $result->Price, PDO::PARAM_INT);
        $query->bindParam(":Quantity", $Quantity, PDO::PARAM_INT);
        $query->bindParam(":total", $total, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_OBJ); 
        
        redirectNotification("Added to the products !");

    }  else{
        $sqlQuery = "SELECT * FROM panier";
        $query1 = $dbh->prepare($sqlQuery);
        $query1->execute();
        $resultPanier = $query1->fetchAll(PDO::FETCH_OBJ);
    }


    $sql = "SELECT SUM(total) as t FROM panier";
    $query = $dbh->prepare($sql);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_OBJ);

    
    

    

    
    

    

    
        

        
       
    














    
    
    












