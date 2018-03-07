<?php

session_start();

?>

<!DOCTYPE html>
<html lang=pt-br>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Login-Cliente &copy;</title>
    <link href="css/bootstrap_login.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
</head>

<body>

<div class="container">

    <form class="form-signin" method="POST" action="configuration/proc_login.php">
        <h2 class="form-signin-heading">Login de Cliente</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" name="email" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Sempre lembrar
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
  
        <br>
        <h5>Ainda não é cadastrado?</h5>
        <script type="text/javascript">
          function direciona()
          {
            location.href="configuration/form_register.php"
          }
        </script>
        <button class="btn btn-lg btn-warning btn-block" onclick="direciona()">Cadastrar</button>
    </form>

    </p>

      <p class="text-center text-danger">
        
        <?php
          //Teste de segurança para usuário após o deslogin
          if(isset($_SESSION['security'])){
              echo $_SESSION['security'];
              unset($_SESSION['security']);
          }
        ?>

      </p>
    </div> <!-- /container -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>