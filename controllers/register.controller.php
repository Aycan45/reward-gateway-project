<?php 

class RegisterController extends Register{

    private $username;
    private $email;
    private $password;


    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function registerUser()
    {
        if ($this->emptyInput() == true) {
            header("location: ./index.php?error=emptyinput");
            exit();
        }
        if ($this->invalidEmail() == true) {
            header("location: ./index.php?error=email");
            exit();
        }

        $this->setUser($this->username, $this->email, $this->password);
    }

    private function emptyInput()
    {

        if (!$this->email) {
            return false;
        }
        if (!$this->username) {
            return false;
        }
        return (bool) $this->password;
    }

    private function invalidEmail()
    {

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        else{
            return true;
        }
        
    }
}


?>