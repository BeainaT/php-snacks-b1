<?php
//Pass name, age and mail as GET parameters
$user_name = $_GET['name'];
$user_age = $_GET['age'];
$user_mail = $_GET['mail'];

//IF name length > 3 (and isn't a number), age is a number and mail is a valid adress mail 
if (strlen($user_name) > 3 && !is_numeric($user_name) && is_numeric($user_age) && filter_var($user_mail, FILTER_VALIDATE_EMAIL)) {
    //print "Accesso Riuscito"
    echo "Accesso Riuscito";
//ELSE print "Accesso Negato"
} else {
    echo "Accesso Negato";
}
?>