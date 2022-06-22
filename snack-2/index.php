<?php
//Pass name, age and mail as GET parameters
$user_name = trim($_GET['name']);
$user_age = $_GET['age'];
$user_mail = $_GET['mail'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
</head>
<body>
    <form action="">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="text" name="age" placeholder="Enter your age">
        <input type="text" name="mail" placeholder="Enter your mail">
        <button type="submit">SEND</button>
    </form>
    <?php 
    //IF name length > 3 (and isn't a number), age is a number and mail is a valid adress mail 
    if (strlen($user_name) > 3 && !is_numeric($user_name) && is_numeric($user_age) && filter_var($user_mail, FILTER_VALIDATE_EMAIL)) {
        //print "Accesso Riuscito"
        echo "Accesso Riuscito";
    //ELSE print "Accesso Negato"
    } else {
        echo "Accesso Negato";
    }
    ?>

</body>
</html>