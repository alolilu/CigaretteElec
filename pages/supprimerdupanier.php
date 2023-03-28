<?php

if(isset($_GET['id'])){
    $sql = "DELETE FROM panier WHERE ID = $_GET[id]";
    $query = $dbh->prepare($sql);
    $query->execute();

    redirectNotification("Deleted From Cart !", $routes['panier']);
}



 