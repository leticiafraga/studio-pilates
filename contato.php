<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato | Studio Zen Pilates</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/4051d30423.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">

      <a class="navbar-brand" href="#"><img src="images/logo.png" alt="Studio Zen Pilates" class="logo"> </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sobre.php">Sobre nós</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="contato.php">Contato</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <main class="container-fluid">

    <div class="row main-row text-container">

      <img class="banner" src="images/pilates1-mob.jpg" alt="">

      <div class="titulo">
        <h1>Entre em contato!</h1>
      </div>

    </div>
    <div class="row contatos">
      <div class="col-12 col-md-6">
        <h3>Telefones:</h3>
        31 3491-9803 <br>
        <i class="fa-brands fa-whatsapp"></i> 98711-5109 / 99814-3380
        <hr>
        <h3>Horários de funcionamento:</h3>
        <ul class="horarios">
          <li>
            Segunda a quinta: 8h às 12h e 15h às 21h
          </li>
          <li>
            Sexta: 8h às 12h
          </li>
        </ul>
        <hr>
        <h3>Instagram:</h3>
        <i class="fa-brands fa-instagram"></i> <a href="https://www.instagram.com/studiozenpilates/"
          target="_blank">@studiozenpilates</a>
      </div>
      <div class="col-12 col-md-6">
        <h3>Endereço:</h3>
        Rua Dep. José Raimundo, 641, Loja 5
        Dona Clara - Belo Horizonte
        <div style="border: 5px;">
          <iframe width="600" height="450" style="border:0; max-width:100%" loading="lazy" allowfullscreen
            src="https://www.google.com/maps/embed/v1/place?q=Rua%20Dep.%20Jos%C3%A9%20Raimundo%2C%20641%20Loja%205%20-%20Dona%20Clara&key=AIzaSyBEBHBvZlybD2SImXeRPjzoLzFn3SP37tc"></iframe>
        </div>
      </div>

    </div>

  </main>

  <?php
   include('footer.php');
 ?>