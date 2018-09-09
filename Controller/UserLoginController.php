<?php

    if(!isset($_POST["EnterElement"]))
        die();

    if(!isset($_POST["loginName"]) || !isset($_POST["userPassword"])){
        $_SESSION["UserLoginController"] = "É necessário inserir a senho e/ou login";
        header("location: SignIn.php");
        return;
    }

    $loginName = $_POST["loginName"];
    $userPassword = $_POST["userPassword"];

    include_once "../Model/UserLogin.php";
    include_once "../Model/SystemUser.php";

    $ModelUserLogin = new UserLogin();
    $loginResult = $ModelUserLogin->getUserLogin($loginName, $userPassword);

    if(count($loginResult) > 0)
        $_SESSION["UserLoginController"] = "Autenticação realizada com sucesso !";
    else{
        $_SESSION["UserLoginController"] = "Usuário não autorizado";
        header("location: SignIn.php");
        return;
    }

?>