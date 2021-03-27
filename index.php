<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/estilo.css">
    
    <meta charset="utf-8">
  </head>
  <body class="align">

  <div class="grid">

    <form action="login.php" method="post" class="form login">

      <header class="login__header">
        <h3 class="login__title">Login</h3>
      </header>

      <div class="login__body">

        <div class="form__field">
          <input name= "login" type="email" placeholder="Email" required>
        </div>

        <div class="form__field">
          <input name = "senha" type="password" placeholder="Password" required>
        </div>

      </div>

      <footer class="login__footer">
        <input type="submit" value="Login">

      </footer>

    </form>

  </div>
<?php
if(isset($_SESSION['nao_logado'])):
  ?>
  <script> alert("Login ou senha Invalidados, por favor tente novamente")</script>
<?php
unset($_SESSION['nao_logado']);
endif;
?>
</body>
</html>