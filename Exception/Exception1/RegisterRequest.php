<?php
class RegisterRequest {
    public $username = "dede";
    public $email = "dede@mail.com";
    public $password = 123;
    public $confirmpassword = 123;

    public $register;

    public function __construct() 
    {
        $username = $this->username;
        $email = $this->email;
        $password = $this->password;
        $confirmpassword = $this->confirmpassword;
        echo $username, $email, $password, $confirmpassword;
    }

    public function ValidateRegisterRequest($username, $email, $password, $confirmpassword) 
    {
        echo $username;
        echo $this->username;
        // die;
        if ($this->username != $username) {
            throw new Exception("Username is salah");
            return;
        } 
        if ($this->email != $email) {
            throw new ValidationException("Email is salah");
            return;
        } 
        if ($this->password != $password) {
            throw new ValidationException("Password is salah");
            return;
        }
        if ($this->confirmpassword != $confirmpassword) {
            throw new ValidationException("Confirm Password is salah");
            return;
        }
        echo "uji";
    }

    public function action() {
        $register = new RegisterRequest();
        $register->username = "zz";
        $register->email = "dede@mail.com";
        $register->password = 123;
        $register->confirmpassword = 124;

        try {
            echo "<br> Cek <br>";
            echo $this->ValidateRegisterRequest($register->username, $register->email, $register->password, $register->confirmpassword);
            echo "Register Berhasil <br>";
        } catch (ValidationException $exception) {
            echo "Validation Exception : ".$exception->getMessage();
        } finally {
            echo "ERROR ATAU TIDAK, AKAN DIEKSEKUSI";
        }
    }
}

$register = new RegisterRequest();

$register->action();