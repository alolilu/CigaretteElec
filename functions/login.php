<?php

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = hash("sha256", $password);
    $sql = "SELECT * FROM user WHERE email = :email AND password = :password";
    $query = $dbh->prepare($sql);
    $query->bindParam(":email", $email, PDO::PARAM_STR);
    $query->bindParam(":password", $password, PDO::PARAM_STR);
    $query->execute();
    $data = $query->fetch(PDO::FETCH_OBJ);


    if (isset($data->email)){
        $_SESSION['isLogged'] = $email;
        redirectNotification("Connected successfully !", $routes['home']);
    } else{
        echo "<div><h3 class='message'>error: incorrect login !</3></div>";    
    }
}