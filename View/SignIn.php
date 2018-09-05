<?php
    include "../Controller/UserLoginController.php";
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Sign In Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../CSS/Style.css?<?php echo time()?>"/>

    <!--Bootstrap's CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <script type="text/script" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>
    <script type="text/script" scr="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</head>
<body class="container">
    <section class="form-group row" id="Form-Container">
        <form action="" method="POST"class ="col-4" id="Form">
            <header>
                <legend class="text-center Form-Text Form-Text-Title">Login</legend>
            </header>
                <fieldset class="Clean-Margin-Top">
                    <input type="text" maxlength="50" placeholder="Usuário" class="form-control" name="loginName"/>
                </fieldset>
                <fieldset class="Clean-Margin-Top">    
                    <input type="password" maxlength="50" placeholder="Senha" class="form-control" name="keyword"/>
                </fieldset>
                <fieldset class="Clean-Margin-Top">
                    <input type="submit" value="Entrar" class="btn btn-success Input-Size" class="form-control"/> 
                    <button class="btn btn-danger Input-Size" class="form-control">
                        <a href="SignIn.php" class="link-decoration">Voltar</a>
                    </button>                
                </fieldset>
                <footer class="Clean-Margin-Top">
                    <span class="Form-Text"><a href="ForgotPassword.php">Esqueci minha senha</a></span>
                    <span class="Form-Text"><a href="SignUp.php">Cadastrar</a></span>
                </footer>
            </form>
    </section>
</body>
</html>