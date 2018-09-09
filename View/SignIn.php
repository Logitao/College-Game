<?php
    include "../Controller/UserLoginController.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Game - Sign In Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Local CSS -->
    <link rel="stylesheet" href="../CSS/Style.css?<?php echo time()?>"/>
    <link rel="shortcut icon" href="../Images/Fiap-Icon.ico"/>

    <!-- JQuery's CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <!--Bootstrap's CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    <script type="text/script" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/script" scr="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

    <?php 
        if(!isset($_SESSION["UserLoginController"]))
            die();

        $user = $_SESSION["UserLoginController"];
        echo "<script type='text/javascript'>alert('$user');</script>";
    ?>

</head>
<body class="container-fluid">
    <section class="form-group row" id="Form-Container">
        <form action="../Controller/UserLoginController.php" method="POST" class ="col-12 col-sm-6 col-md-8 col-xl-4" id="Form">
            <header>
                <legend class="text-center Form-Text Form-Text-Title">Login</legend>
            </header>
                <fieldset class="Clean-Margin-Top">
                    <input type="text" maxlength="50" placeholder="Usuário" class="form-control" name="loginName" required/>
                </fieldset>
                <fieldset class="Clean-Margin-Top">    
                    <input type="password" maxlength="50" placeholder="Senha" class="form-control" name="userPassword" required/>
                </fieldset>
                <fieldset class="Clean-Margin-Top"> 
                    <button type="submit" class="btn btn-success Input-Size" class="form-control" id="EnterElement" name="EnterElement">
                        Entrar
                    </button>
                    <button class="btn btn-danger Input-Size" class="form-control">
                        <a href="SignIn.php" class="link-decoration">Voltar</a>
                    </button>
                </fieldset>
                <footer class="Clean-Margin-Top row">
                    <span class="Form-Text col-6 col-sm-6" ><a href="ForgotPassword.php" class="link-decoration">Esqueci minha senha</a></span>
                    <span class="Form-Text col-4 col-sm-4"><a href="SignUp.php" class="link-decoration">Cadastrar</a></span>
                </footer>
            </form>
    </section>
    
</body>
</html>