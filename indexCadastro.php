<?php
  session_start();
  // Checa se já está logado para mover para pagina home
  if (isset($_SESSION['usuario'])) {
    header('location: Views/cliente/login_sucessoclient.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guardian - Login</title>
    <link rel="stylesheet" href="Assets/css/style.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</head>
<body>
    <div class="login-page">
        <div class="form">
          <img src="Assets/img/logo_bg_white.png" style="width: 15rem; margin-bottom: 1rem;"/>
          <form class="login-form" method="POST" action="Controllers/cliente/cadastrarcliente.php">
            <?php
              if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);  
              }
            ?>
            <input type="text" placeholder="Nome" name="name"/>
            <input type="text" placeholder="Sobrenome" name="lastname"/>
            <input type="text" placeholder="Nome de Usuário" name="username"/>
            <input type="text" placeholder="CNH" name="cnh"/>            
            <input type="text" placeholder="Email" name="email"/>
            <input type="password" placeholder="Senha" name="password"/>            
            <button>Cadastrar</button>
            <p class="message">Já é cadastrado? <a href="index.php">Fazer Login</a></p>
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