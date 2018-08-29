<?php
    include_once "./Model/UserLogin.php";
    include_once "./Model/SystemUser.php";

    class UserLoginController{
        
        private $ModelUserLogin;

        public function __construct(){
            $this->ModelUserLogin = new UserLogin();
        }

        public function signIn($loginName, $userPassword){
            $loginResult = $this->ModelUserLogin->getUserLogin($loginName, $userPassword);
            if(count($loginResult) > 0)
                return true;
            else
                return false;
        }

        public function forgotPassword($loginName, $keyWord){
            $forgotResult = $this->ModelUserLogin->getUserLoginForgot($loginName, $keyWord);
            if(count($forgotResult) > 0)
                return $forgotResult[0]->userPassword;
            else
                return null;
        }

        public function signUp(/*systemUser*/$username, $email, /*userLogin*/$loginName, $userPassword, $keyWord){
            $systemUser = new SystemUser();
            $systemUserResult = $systemUser->getSystemUser($username, $email);
            if(count($systemUserResult) > 0)
                return false;
            
            $systemUser->insertSystemUser($username, $email);
            $systemUser = $systemUser->getSystemUser($username, $email);

            $userLogin = new UserLogin();
            $userLogin->insertUserLogin($username, $userPassword, $keyWord, $systemUser[0]->id); 
            return true;
        }
    }
?>