<?php
    //Test
    include "Model/SystemUser.php";
    $test = new SystemUser();
    $test->Username = "igor carlos";
    $test->Email = "igor.almeida@hotmail.com";
    $test->Score = 100;
    $test->InsertSystemUser();

    //Test
    include "Model/UserLogin.php";
    $testT = new UserLogin();
    $testT->LoginName = "igor";
    $testT->UserPassword = "passwordTest";
    $testT->IsActive = true;
    $testT->IdSystemUser = 1;
    $testT->InsertUserLogin();
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