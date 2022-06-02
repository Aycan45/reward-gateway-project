<?php 

if (isset($_POST['register'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    include('./classes/databasehelper.class.php');
    include('./classes/login.class.php');
    include('./controllers/login.controller.php');

    $login = new LoginController($email, $password);
    $register->loginUser();

    header("location: ./index.php");
    exit;

}


?>