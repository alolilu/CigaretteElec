<?php include ('vendor/autoload.php') ?>
<?php include ('router.php') ?>
<?php include ('functions/function.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&display=swap" rel="stylesheet">
    <title></title>
</head>
<body>

<?php include "modules/navbar.php"; ?>

<?php include $page ?> <?php printNotification() ?>

<?php include "modules/footer.php"; ?>

    
<script type="text/javascript" src="app.js"></script>
<script src="https://kit.fontawesome.com/8d9e697281.js" crossorigin="anonymous"></script>
</body>
</html>