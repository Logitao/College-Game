<?php
    include "../Controller/UserLoginController.php";
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Sign Up Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../CSS/Style.css"/>

    <!--Bootstrap's CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <script type="text/script" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>
    <script type="text/script" scr="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</head>
<body class="container">
    <section class="form-group row" id="Form-Container">
        <form action="" method="POST" class="col-4" id="Form">
            <header>
                <legend class="text-center Form-Text Form-Text-Title">Cadastro</legend>
            </header>
                <fieldset class="Clean-Margin-Top">
                    <input type="text" maxlength="50" placeholder="Nome" class="form-control" name="username"/>
                </fieldset>
                <fieldset class="Clean-Margin-Top">
                    <input type="text" maxlength="50" placeholder="Email" class="form-control" name="email"/>
                </fieldset>
                <fieldset class="Clean-Margin-Top">
                    <input type="text" maxlength="50" placeholder="Usuário" class="form-control" name="username"/>
                </fieldset>
                <fieldset class="Clean-Margin-Top">
                    <input type="password" maxlength="50" placeholder="Senha" class="form-control" name="password"/>
                </fieldset>
                <fieldset class="Clean-Margin-Top">
                    <input type="password" maxlength="50" placeholder="Confirmação de Senha" class="form-control" name="password"/>
                </fieldset>
                <fieldset class="Clean-Margin-Top">
                    <input type="text" maxlength="50" placeholder="Palavra Chave" class="form-control" name="keyWord"/>
                </fieldset>
                <fieldset class="Clean-Margin-Top">
                    <input type="submit" value="Cadastrar" class="btn btn-success Input-Size" class="form-control"/> 
                    <input type="button" value="Voltar" class="btn btn-danger Input-Size" class="form-control"/>
                </fieldset>
            </form>
    </section>
</body>
</html>