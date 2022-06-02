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
            if ($statement->rowCount == 0) {
                $statement = null;
                header("location: ./index.php?error=usernotfound");
                exit();
            }


            $hashedpassword = $statement->fetchAll(PDO::FETCH_ASSOC);

            $checkPassword = password_verify($password, $hashedpassword[0]["PASSWORD"]);

            if ($checkPassword == false) {
                $statement = null;
                header("location: ./index.php?error=wrongpassword");
                exit();
            }
            elseif ($checkPassword == true) {
                $statement = $this->connect()->prepare("SELECT * FROM users WHERE EMAIL = :email AND PASSWORD= :password;");

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
                if ($statement->rowCount == 0) {
                    $statement = null;
                    header("location: ./index.php?error=usernotfound");
                    exit();
                }

                $user = $statement->fetchAll(PDO::FETCH_ASSOC);

                session_start();

                $_SESSION['id'] = $user[0]['ID'];
                $_SESSION['email'] = $user[0]['EMAIL'];

                $statement = null;
            }
            
        }

    } 


?>