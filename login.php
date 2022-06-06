<?php 

if (isset($_POST['login'])) {

    
    $email = $_POST['email'];
    $password = $_POST['password'];

    session_start();

    $_SESSION['email'] = $email;

    include('./classes/databasehelper.class.php');
    include('./classes/login.class.php');
    include('./controllers/login.controller.php');

    $login = new LoginController($email, $password);
    $login->loginUser();


}


?>