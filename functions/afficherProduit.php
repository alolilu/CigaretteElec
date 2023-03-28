<?php

use ScssPhp\ScssPhp\Value\Value;

if(isset($_POST['search'])){
    $search = "%$_POST[search]%";
    $sql = "SELECT * FROM Products WHERE Name LIKE :search LIMIT 25 ";
    $query = $dbh->prepare($sql);
    $query->bindParam(":search", $search, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_OBJ);

    // var_dump(count($result));

    if (count($result) == 0){
        echo "  <div class='container-fluid' style='display: flex; justify-content: center; align-items: center; margin: 100px 0px; position: absolute; top: 340px; margin-bottom: 50px;'>
                    <div class='container' style='display: flex; justify-content: center; align-items: center; background-color: rgba(148, 148, 148, 0.426); height: 80px; width: 700px; border: solid red 4px; border-radius: 13px; box-shadow:  rgba(148, 148, 148, 0.426) 0 0 0 10px; padding: 20px;'>
                        <h5 style='text-align: center; margin:0px;'>Sorry, No Products Matching Your Search</h5>
                    </div>
                </div>";
    }
    
    }else{
        $sql = "SELECT * FROM Products LIMIT 4";
        $query = $dbh->prepare($sql);
        $query->execute();

        $result = $query->fetchAll(PDO::FETCH_OBJ);

    }
    
    if(isset($_POST['afficherTousLesProduits'])){
        $sql = "SELECT * FROM Products";
        $query = $dbh->prepare($sql);
        $query->execute();
        
        $result = $query->fetchAll(PDO::FETCH_OBJ);
    }

    if(isset($_POST['trierPar'])){
        if($_POST['trierPar']=='mostPopural'){
            $sql = "SELECT * FROM Products ORDER BY Popular DESC";
            $query = $dbh->prepare($sql);
            $query->execute();
        
            $result = $query->fetchAll(PDO::FETCH_OBJ);
            echo "<div><h3 class='message'>By The Most popular</3></div>";
        }
        elseif($_POST['trierPar']=='lessPopular'){
            $sql = "SELECT * FROM Products ORDER BY Popular ASC";
            $query = $dbh->prepare($sql);
            $query->execute();
        
            $result = $query->fetchAll(PDO::FETCH_OBJ);
            echo "<div><h3 class='message'>By The Less popular</3></div>";
        } 
        elseif($_POST['trierPar']=='decreasing'){
            $sql = "SELECT * FROM Products ORDER BY Price DESC";
            $query = $dbh->prepare($sql);
            $query->execute();
        
            $result = $query->fetchAll(PDO::FETCH_OBJ);
            echo "<div><h3 class='message'>By Price decreasing</3></div>";
        }
        elseif($_POST['trierPar']=='increasing'){
            $sql = "SELECT * FROM Products ORDER BY Price ASC";
            $query = $dbh->prepare($sql);
            $query->execute();
        
            $result = $query->fetchAll(PDO::FETCH_OBJ);
            echo "<div><h3 class='message'>By Price increasing</3></div>";
        }   
    }

// permet d'afficher un tableau de variables
// var_dump($result);
   




