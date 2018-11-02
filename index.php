<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guardian - Login</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</head>
<body>
    <div class="login-page">
        <div class="form">
          <form class="register-form" method="POST" action="php_utilities/cadastrarcliente.php">
            <input type="text" placeholder="Nome" name="name"/>
            <input type="text" placeholder="Sobrenome" name="lastname"/>
            <input type="text" placeholder="Nome de Usuário" name="username"/>
            <input type="text" placeholder="CNH" name="cnh"/>            
            <input type="text" placeholder="Email" name="email"/>
            <input type="password" placeholder="Senha" name="password"/>            
            <button>Cadastrar</button>
            <p class="message">Já é cadastrado? <a href="#">Fazer Login</a></p>
          </form>
          <form class="login-form" method="POST" action="php_utilities/login.php">
            <input type="text" name="username" placeholder="Nome de Usuário"/>
            <input type="password" name="password" placeholder="Senha"/>
            <button>Login</button>
            <p class="message">Não é cadastrado? <a href="#">Criar uma Conta</a></p>
          </form>
        </div>
      </div>

      <script>
          $('.message').click(function(){
             $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
            });
      </script>
</body>
</html>