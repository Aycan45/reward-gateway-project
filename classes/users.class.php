<?php
    class Users extends DataBaseHelper{

        protected function getAllUsers(){

            $statement = $this->connect()->query("SELECT * FROM users");

            if ($statement->rowCount()>0) {
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    $users[] = $row;
                }

                return $users;
            }


        }


    }



?>