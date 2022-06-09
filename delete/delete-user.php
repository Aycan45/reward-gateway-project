<?php
include("../classes/databasehelper.class.php");
include("../classes/users.class.php");
include("../controllers/users.controller.php");


if (isset($_GET['id'])) {
    
    $id = intval($_GET["id"]);

    $user = new UserController;

    $result = $user->deleteUser($id);

    if ($result) {
        //echo "User deleted succesfully";
        echo "<script>alert('User deleted succesfully')</script>";

        header("refresh=1; url=../user.php");
    }
    else{
        echo "<script>alert('User not deleted')</script>";

        header("refresh=3; url=../user.php");
    }

}


?>