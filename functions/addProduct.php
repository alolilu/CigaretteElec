<?php

    if (isset($_POST['addProduct'])){
        $Name = $_POST['Name'];
        $Description = $_POST['Description'];
        $Image = $_POST['Image'];
        $Price = $_POST['Price'];
        $Categorie = $_POST['Categorie'];
        $Popular = $_POST['Popular'];
        // $CHAMP = $_POST['CHAMP'];
        if (!isset($Name)||$Name== '' || !isset($Description)||$Description=='' || !isset($Image)||$Image=='' || !isset($Price)||$Price=='' || !isset($Categorie)||$Categorie=='' || !isset($Popular)||$Popular==''){
            // if (!isset($Name)||$Name== '' || !isset($Description)||$Description=='' || !isset($Image)||$Image=='' || !isset($Price)||$Price=='' || !isset($Categorie)||$Categorie=='' || !isset($Popular)||$Popular=='' || !isset($CHAMP)||$CHAMP==''){
            redirectNotification("Not all fields are filled in !");
        }

        else{
            $sql = "INSERT INTO products (id, Name, Description, Image, Price, Categorie, Popular) VALUES (NULL, :Name, :Description, :Image, :Price, :Categorie, :Popular)";
            // $sql = "INSERT INTO products (id, Name, Description, Image, Price, Categorie, Popular, CHAMP) VALUES (NULL, :Name, :Description, :Image, :Price, :Categorie, :Popular, :CHAMP)";
            $query = $dbh->prepare($sql);
            $query->bindParam(":Name", $Name , PDO::PARAM_STR);
            $query->bindParam(":Description", $Description, PDO::PARAM_STR);
            $query->bindParam(":Image", $Image, PDO::PARAM_STR);
            $query->bindParam(":Price", $Price, PDO::PARAM_STR);
            $query->bindParam(":Categorie", $Categorie, PDO::PARAM_STR);
            $query->bindParam(":Popular", $Popular, PDO::PARAM_STR);
            // $query->bindParam(":Popular", $CHAMP, PDO::PARAM_STR);
            $query->execute();
            $data = $query->fetch(PDO::FETCH_OBJ);
            echo "<div><h3 class='message'>Added to the products !</3></div>";
        }   
    }