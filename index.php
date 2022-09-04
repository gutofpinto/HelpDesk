<?php
  session_start();
  if(isset($_GET['login']) && $_GET['login'] == 'autenticar'){
    echo'<div class="alerta" role="alert">Autenticação nescessaria!</div>';
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
      .erro{
        background: red;
        color: white;
        text-align: center;
        border-radius: 10px;
        height: 35px;
        margin-top: 6px;
      }
      .alerta{
        background: red;
        color: white;
        text-align: center;
        height: 50px;
        padding: 0px 6px;
        font-size: 30px;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>
    <div class="container">    
      <div class="row">
        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="config/login.php" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control" name="usuario" placeholder="Usuário">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="senha" placeholder="Senha">
                </div>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                <?php
                  if(isset($_GET['login']) && $_GET['login'] == 'erro'){
                ?>
                  <div class="erro">
                    <h4>Usuário ou senha icorreto!</h4>
                  </div>
                <?php
                  }
                ?>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>