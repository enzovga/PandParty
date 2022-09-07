<?php
    session_start();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pand Party - Sala</title>
    <link rel="stylesheet" href="./main/main.css" />
  </head>

  <body>
<center>
    <p id="notification" hidden></p>
    <div class="entry-modal" id="entry-modal">
    <h1 class="display-3">Pand Party</h1>
        <p>Crie ou entre em uma sala</p>
        <input id="room-input" class="room-input btn btn-outline-primary" placeholder="Insira o código">
        <div>
            <br>
            <button class="btn btn-outline-primary btn_lg" onclick="createRoom()">Criar sala</button>
            <button class="btn btn-outline-primary btn_lg" onclick="joinRoom()">Entrar na sala</button>
        </div>
    </div>
</center>
    <div class="video_section">
      <div class="video"> <font color="#fffff">
      <video id="remote-video"></video>
        <div class="circles">
          <div class="circle circle-3">
            <a onclick="startScreenShare()"><img src="images/videoshare.png"></a>
          </div>
        </div>
      </div> </font>
      <div class="side_section">
        <div class="lucas">
          <div class="boxFoto"><img src="imagem/placeholder.jpg" width=50 height=50 id="img_circular"></div>
          <div class="side_box"> <font color="#fffff"></font>
            <font color="#fffff">
            <p>lucas</p>
          </div> </font>
        </div>
        <div class="second_box">
          <video id="local-video"></video>
        </div>
        <div class="thirde_box"></div>
        <div class="fourth_box">
            <section id="content"></section>
          <div class="fourth_box--first"></div>
          <div class="fourh_box--second">
            <input type="text" class="form-control" placeholder="Nome de usuário..." aria-label="Username" aria-describedby="basic-addon1" name="name" id="name">
            <input type="text" class="form-control" placeholder="Digite sua mensagem..." aria-label="Username" aria-describedby="basic-addon1" name="message" id="message">
          <button type="button" class="btn btn-outline-primary" id="btn1">&#8611;</button>
          </div>
        </div>
      </div>
    </div>
    <font color="#fffff">
    <div class="bottom_part">
      <div class="straight_bar">
        <div class="radio">
          <p>radio</p>
        </div>
        <div class="youtube">
          <p>Youtube</p>
        </div>
        <div class="goodle drive">
          <p>Google drive</p>
        </div>
        <div class="youtube">
        <a href="jogos.php" target="_blank">Jogos</a>
        </div>
      </div> 
      <div class="middle"></div>
      <div class="participentes">
        <h2><font color="#fffff">Entre em contato conosco</font></h2>
        <font color="#00000">
        <div class="content">
          <div class="left">
            <p>Email: pandpartycontato@gmail.com</p>
            </div>
          </font>
          </div>
        </div>
      </div>
    </div></font>
  </body>

  <script src="assets/js/script.js"></script>
  <script src="https://unpkg.com/peerjs@1.3.1/dist/peerjs.min.js"></script>
  <script src="jsvideocall/script.js"></script>

</html>
