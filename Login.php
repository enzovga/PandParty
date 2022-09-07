<?php
require_once 'ClassesLogin/usuarios.php';
$u = new Usuario;
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fontslogin/icomoon/style.css">

    <link rel="stylesheet" href="csslogin/owl.carousel.min.css">


    <link rel="stylesheet" href="csslogin/bootstrap.min.css">
    

    <link rel="stylesheet" href="csslogin/style.css">

    <title>Entrar - Pand Party</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="form-block">
                <div class="mb-4">
                  <center>
                    <div><h1><Strong>Entrar</Strong></h1></div>
                    <div><img src="images/pandapng.png" width="125" height="125"></div>
                  
                    <h5>Pand Party</h5>
                  </center>
                <form action="salavideo.php" method="post">
                  <div class="form-group first">
                    <label for="username">E-mail</label>
                    <input type="text" class="form-control" name="email" id="email">

                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Senha</label>
                    <input type="password" class="form-control" name="senha" id="senha">
                    
                  </div>
                  
                  <div class="d-flex mb-5 align-items-center">
                    <span class="ml-auto"><a href="Cadastro.php" class="forgot-pass">Quero me cadastrar</a></span> 
                  </div>

                  <center>
                    <form>
                      <input type="button" class="btn btn-info" value="Voltar" onClick="JavaScript: window.history.back();">
                    </form>
                    <!--<button type="button" class="btn btn-info btn-lg">Entrar</button>-->
                    <input type="submit" class="btn btn-info btn-lg" value="Entrar">
                  </center>
                  
            
                </form>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
  <?php

  if(isset($_POST['nome']))
    {
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      if(!empty($email) && !empty($senha))
        {
            $u->conectar("projeto_site","localhost","root","");
            if($u->msgErro =="")
            {

                if($u->logar($email,$senha))
                {
                    header("location: telaperfil.php");    
                }else
                {
                    ?>
                    <div class="msg-erro">
                        Email e/ou senha estão incorretos!
                    </div>
                    <?php
                }

            }else
            {
                ?>
                <div class="msg-erro">
                    <?php
                    echo "Erro: ".$u->msgErro;
                    ?>
                </div>
                <?php    
            }

        }else
        {
            ?>
            <div class="msg-erro">
                Preencha todos os campos!
            </div>
            <?php
        }
    }
  ?>
  </body>
</html>