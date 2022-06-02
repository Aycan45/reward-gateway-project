<?php 

if (isset($_POST['register'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    include('./classes/databasehelper.class.php');
    include('./classes/register.class.php');
    include('./controllers/register.controller.php');

    $register = new RegisterController($email, $password);
    $register->registerUser();

    header("location: ./index.php");
    exit;

}


?>