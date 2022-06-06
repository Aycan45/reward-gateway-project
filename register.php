<?php 

if (isset($_POST['register'])) {
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    session_start();

    $_SESSION['email'] = $email;

    include('./classes/databasehelper.class.php');
    include('./classes/register.class.php');
    include('./controllers/register.controller.php');

    $register = new RegisterController($username, $email, $password);
    $register->registerUser();

    header("location: ./index.php");
    exit;

}


?>