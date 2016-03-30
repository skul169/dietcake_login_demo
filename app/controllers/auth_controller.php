<?php
class AuthController extends AppController
{
    public function login()
    {
        if(isset($_SESSION['userinfo'])){
            header("location:/");
        }
    }
    
    public function loginDo()
    {
        $username = $_POST['username'];
        $pass = $_POST['password'];
        if (!isset($username) || !isset($pass)) {
            header("location:/auth/login");
        }
        
        $userInfo = User::checkLogin($username, $pass);
        if (count($userInfo) === 1) {
            session_start();
            $_SESSION['userinfo'] = $userInfo[0];
            header("location:/");
        }
        
        $_SESSION['error_message'] = 'Login Failed. Please try again !!!';
        header("location:/auth/login");
    }

    public function logout()
    {
        unset($_SESSION['userinfo']);
        header("location:/auth/login");
    }
}
