<?php 

class RegisterController extends Register{

    private $email;
    private $password;


    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function registerUser()
    {
        if ($this->emptyInput() == false) {
            header("location: ./index.php?error=emptyinput");
            exit();
        }
        if ($this->invalidEmail() == false) {
            header("location: ./index.php?error=email");
            exit();
        }

        $this->setUser($this->email, $this->password);
    }

    private function emptyInput()
    {

        if (!$this->email) {
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