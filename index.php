<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Studio Zen Pilates | Pilates e Fisioterapia</title>
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
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sobre.php">Sobre nós</a>
          </li>
          <li class="nav-item">
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
        <h1>Pilates & Fisioterapia</h1>
        <h3>Studio Zen Pilates</h3>
      </div>

    </div>

    <div id="whatsapp" style="padding: 50px 0px;">
     
      <a href="#">
        <button><i class="fa-brands fa-whatsapp"></i> Agende sua aula experimental!</button>
      </a>

    </div>
    <div class="row row-cards-home">
      <div class="col-12 col-md-6 col-lg-4 cards-home">
        <div>
          Atendimento em domicílio
          <img src="images/pilates1.jpg" alt="">
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 cards-home">
        <div>
          Fisioterapia cardio respiratória
          <img src="https://picsum.photos/400/400" alt="">
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 cards-home">
        <div>
          Fisioterapia geriátrica
          <img src="https://picsum.photos/id/200/400/400" alt="">
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 cards-home">
        <div>
          Pilates
          <img src="https://picsum.photos/id/251/400/400" alt="">
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 cards-home">
        <div>
          Fisioterapia neurológica
          <img src="https://picsum.photos/id/238/400/400" alt="">
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 cards-home">
        <div>
          Atendimento em domicílio
          <img src="https://picsum.photos/id/240/400/400" alt="">
        </div>
      </div>

    </div>
  </main>

  <?php
   include('footer.php');
 ?>