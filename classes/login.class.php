<?php

    class Login extends DataBaseHelper{

        protected function getUser($email, $password)
        {
            $statement = $this->connect()->prepare("SELECT PASSWORD FROM users WHERE EMAIL = :email;");  

            $statement->bindValue('email', $email, PDO::PARAM_STR);

            $statement->bindValue('password', $password, PDO::PARAM_STR);

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

            if ( $statement->rowCount() > 0) {

                $_SESSION['email'] = $email;

                header("Location: index.php");
            }
            else {
                echo "<h2>Wrong credentials</h2>";

                header('refresh:3; url=login.html');
            }
            
        }

    } 


?>