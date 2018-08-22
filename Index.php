<?php
    include "Model/SystemUser.php";
    include "Model/UserLogin.php";

    $userLogin = new UserLogin();
    $userLogin->loginName = "t";
    $userLogin->userPassword = "t";
    $userLogin->isActive = true;
    $userLogin->idSystemUser = 1;
    $userLogin->insertUserLogin();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Sign In Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
</body>
</html>