<?php 

    class UserController extends Users{

        public function showAllUsers(){

            $users = $this->getAllUsers();

            foreach((array) $users as $user){
            ?>
                <tbody>
                    <tr>
                    <td><?= $user['USERNAME']?></td>
                    <td><?= $user['EMAIL']?></td>
                    <td><?= $user['ROLE']?></td>
                    <td><a href="./delete/delete-user.php?id=<?= $user["ID"]?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <tr>
                </tbody>

            <?php
            }

        }

        public function deleteUser($id){

            $statement = $this->connect()->prepare("DELETE FROM users WHERE ID = :id");

            $statement->bindValue("id", $id, PDO::PARAM_INT);

            $result = $statement->execute();

            if ($result) {
                return true;
            }
            else{
                return false;
            }


        }


    }

?>