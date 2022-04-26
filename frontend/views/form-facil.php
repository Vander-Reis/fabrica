<?php

include('./protect.php');

?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulário fácil</title>

  <!-- Icone -->
  <link rel="shortcut icon" href="https://pbs.twimg.com/profile_images/674285053107707904/DffC3jYg_400x400.png" type="image/x-icon" />

  <!-- CSS -->

  <link rel="stylesheet" href="../style/forms.css" />

  <!-- Fonts -->

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="header"></div>

  <div class="formulario">
    <div class="form">
      <h1 class="title">Formulário fácil </h1>

      <p> Bem vindo <b> <?php echo $_SESSION['nome']  ?> !</b> </p>

      <p class="description">
        São questões de matemática do ensino médio que abordam diversos temas como progressão aritmética, teorema de Pitágoras, análise combinatória, função de segundo grau e até mesmo fundamentos básicos de matemática como comparação e operação com frações, raciocínio lógico e regra de três.
      </p>
    </div>

    <hr />

    <div class="inputs">

      <div class="image">
        <img src="">
      </div>

      <form id="form" action="pontuacao.php" method="post">

        <?php

        $conexao = mysqli_connect("127.0.0.1:3306", "root", "", "db_fabrica")
          or die("Não foi possível fazer a conexão");
        $consulta = "SELECT p.id, p.descricao, p.gabarito, p.id_materia, m.nome materia FROM tb_pergunta p, tb_materia m WHERE p.id_materia = m.id AND m.id = 1";
        $resultado = mysqli_query($conexao, $consulta);
        $num_perguntas = mysqli_num_rows($resultado);

        echo "<table name='tb_questionario'>";
        // para cada pergunta
        for ($i = 0; $i < $num_perguntas; $i++) {
          list($id_pergunta, $descricao_pergunta, $gabarito, $id_materia, $nome_materia) = mysqli_fetch_row($resultado);
          echo "<tr><td colspan='2'>$descricao_pergunta</td></tr>";
          $consulta_resposta = "SELECT id, letra, descricao FROM tb_resposta WHERE id_pergunta = " . $id_pergunta;
          $resultado_respostas = mysqli_query($conexao, $consulta_resposta);
          $num_respostas = mysqli_num_rows($resultado_respostas);
          // para cada resposta
          for ($j = 0; $j < $num_respostas; $j++) {
            list($id_resposta, $letra_resposta, $descricao_resposta) = mysqli_fetch_row($resultado_respostas);
            echo "<tr><td width='45px'><input type='radio' name='rd" . $id_pergunta . "' id='rd" . $id_pergunta . "" . $id_resposta . "' value='". $letra_resposta ."'/> $letra_resposta)</td><td>$descricao_resposta</td></tr>";
          }
        }
        echo "</table>";
        mysqli_close($conexao);
        ?>

        <input type="submit" value="Enviar" class="button" id="submit">
      </form>

      <div class="enviar">
        <a href="logaut.php">Sair</a>
      </div>
    </div>
  </div>




  <script src="../src/form-facil.js"></script>
</body>

</html>