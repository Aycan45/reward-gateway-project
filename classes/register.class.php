<?php

    class Register extends DataBaseHelper{

        protected function setUser($username, $email, $password)
        {
            $statement = $this->connect()->prepare("INSERT INTO users (`USERNAME` `EMAIL`, `PASSWORD`) VALUES (:username,:email,:password);");   

            $hashpassword = password_hash($password, PASSWORD_DEFAULT);

            $statement->bindValue('username', $username, PDO::PARAM_STR);

            $statement->bindValue('email', $email, PDO::PARAM_STR);

            $statement->bindValue('password', $hashpassword, PDO::PARAM_STR);

            try {
                if (!$statement->execute()) {
                    $statement = null;
                    header("location: ./index.php?error=stmtfailed1");
                    exit();
                }
            } catch (Exception $e) {
                echo $e->getMessage();
                header("location: login.html");
            }

            $statement=null;
        }


    } 


?>