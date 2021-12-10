<?php

  include('./protect.php');

  if((!isset ($_SESSION['id']) == true)){
  header('location:login.php');
  }

  echo "login fabrica" . $_SESSION['id'];

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias</title>
    <link rel="stylesheet" href="materias.css">
    <link
      rel="shortcut icon"
      href="https://pbs.twimg.com/profile_images/674285053107707904/DffC3jYg_400x400.png"
      type="image/x-icon"
    />

    <!-- ICONES -->

    <link rel="stylesheet" href="icones/style.css" />

</head>
<body>

    <header id="header">
        <nav class="container">
          <a class="logo" href="#">Fábrica de<span> software</span></a>
  
          <!-- MENU -->
  
          <div class="menu">
            <ul class="grid">
              <li><a class="title" href="logaut.php">Início</a></li>
            </ul>
        </div>

        <div class="toggle icon-menu"></div>
        <div class="toggle icon-close"></div>
      </nav>
    </header>
    
    <!-- Exercises -->
<main>
    <section class="section" id="exercises">
        <div class="container grid">
          <header>
            <h2 class="title">Exercícios</h2>
            <p class="subtitle">
              Neste site, abordaremos desde exercícios de nivel fácil até
              exercícios nivel dificil, trazendo diversos problemas, contendo as
              áreas do ensino médio.
            </p>
          </header>

          <div class="cards grid">
            <div class="card">
              <a href="/fabrica-de-software-backend/frontend/views/form-facil.php">
                <img src="https://i.pinimg.com/736x/a2/cf/a2/a2cfa2edbae03130a44ea593efdf95e8.jpg" alt="Dificuldade fácil" />
                <h3>Exercícios matemática</h3>
                <p>
                  São questões de matemática do ensino médio que abordam diversos temas...
                </p>
              </a>
            </div>

            <div class="card">
              <a href="./login/login.html">
                <img src="https://image.freepik.com/vetores-gratis/objetos-de-laboratorio-de-ciencias_23-2148488312.jpg" alt="Dificildade media" />
                <h3>Exercícios ciências</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi adipisci quaerat quis debitis perferendis!
                </p>
              </a>
            </div>

            <div class="card">
              <a href="./login/login.html">
                <img
                  src="./materias/geo.jpg"
                  alt="Dificildade difícil"
                />
                <h3>Exercícios geografia</h3>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi adipisci quaerat quis debitis perferendis!
                </p>
              </a>
            </div>


            
            <div class="card">
              <a href="./views/form-facil.html">
                <img src="./materias/port.jpg" alt="Dificuldade fácil" />
                <h3>Exercícios de português</h3>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi adipisci quaerat quis debitis perferendis!
                </p>
              </a>
            </div>

            <div class="card">
              <a href="./login/login.html">
                <img src="./materias/Artes.webp" alt="Dificildade media" />
                <h3>Exercícios de artes</h3>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi adipisci quaerat quis debitis perferendis!
                </p>
              </a>
            </div>

            <div class="card">
              <a href="./login/login.html">
                <img
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxVr902LaWXnsDihrH9V12ToNzn052vA-ZYi-l1vrzLWJuiYe_hYxcq_V36YGAGpfQk78&usqp=CAU"
                  alt="Dificildade difícil"
                />
                <h3>Exercícios de física</h3>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi adipisci quaerat quis debitis perferendis!
                </p>
              </a>
            </div>
          </div>

          </div>

     

      </section>

</main>

    <script src="main.js"></script>

</body>
</html>