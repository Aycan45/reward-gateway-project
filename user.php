<?php
    include_once('./includes/admin.header.inc.php');
    include("./classes/databasehelper.class.php");
    include("./classes/users.class.php");
    include("./controllers/users.controller.php");

    $users = new UserController;

   
?>
  <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
    <?php 
         $users->showAllUsers();
    ?>
  </table>
