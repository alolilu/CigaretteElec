<?php

if(isset($_POST['logout'])){
    session_destroy();
    redirectNotification("your are deconnected !", $routes['home']);
}

   