<?php 

    if (isset($_POST['register'])){
        $FirstName = $_POST['FirstName'];
        $SecondName = $_POST['SecondName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = hash("sha256", $password);
        if (!isset($email)||$email== '' || !isset($password)||$password=='' || !isset($FirstName)||$FirstName==''|| !isset($SecondName)||$SecondName==''){
            redirectNotification("Not all fields are filled in !");
        }

        else{
            $sql = "INSERT INTO user (id, FirstName, SecondName, email, password) VALUES (NULL, :FirstName, :SecondName, :email, :password)";
            $query = $dbh->prepare($sql);
            $query->bindParam(":FirstName", $FirstName, PDO::PARAM_STR);
            $query->bindParam(":SecondName", $SecondName, PDO::PARAM_STR);
            $query->bindParam(":email", $email, PDO::PARAM_STR);
            $query->bindParam(":password", $password, PDO::PARAM_STR);
            $query->execute();
            $data = $query->fetch(PDO::FETCH_OBJ);
            redirectNotification("successfully registered !", $routes['home']);
        }   
    }
