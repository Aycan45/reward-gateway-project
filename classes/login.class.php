<?php

    class Login extends DataBaseHelper{

        protected function getUser($email, $password)
        {
            $statement = $this->connect()->prepare("SELECT * FROM users WHERE EMAIL = :email");  

            $statement->bindValue('email', $email, PDO::PARAM_STR);

            $statement->execute();

            $result = $statement->fetch();

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
            if ($statement->rowCount() == 0) {
                echo "User not found";

                header("refresh: 3; url=login.html");
            }
            else if($statement->rowCount() == 1){

                if (password_verify($password, $result["PASSWORD"])) {
                    header("./index.php");
                }
                else {
                    echo "Wrong password";

                    header("refresh: 3; url=login.html");
                }
            }
            
        }

    } 


?>