<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pontuação</title>

    <link rel="stylesheet" href="./resultado.css" />
</head>

<body>

    <?php

    session_start();

    $conexao = mysqli_connect("127.0.0.1:3306", "root", "root", "db_fabrica")
        or die("Não foi possível fazer a conexão");
    $consulta = "SELECT id, descricao, gabarito, id_materia from tb_pergunta where id_materia = '1'";
    $resultado = mysqli_query($conexao, $consulta);
    $num_perguntas = mysqli_num_rows($resultado);


    $pontuacao = 0;

    $erros = 0;

    for ($i = 0; $i < $num_perguntas; $i++) {

        list($id, $descricao, $gabarito, $id_materia) = mysqli_fetch_row($resultado);

        $resposta = $_POST["rd$id"];
        
        $inserir_resposta = "INSERT into tb_resposta_usuario(id_login, id_pergunta, resposta) values(" . $_SESSION['id'] . ", $id, '$resposta')";

        $resultado_inserir = mysqli_query($conexao, $inserir_resposta)
            or die("Falha na execução do cadastro (insert resultado)");

        if ($resposta == $gabarito) {
            $pontuacao++;
        } else if ($resposta != $gabarito) {
            $erros++;
        }


    }

    $pontuacao_final = "INSERT into tb_pontuacao(id_login, pontuacao, data) values(" . $_SESSION['id'] . " , $pontuacao, now())";


    $nota_final = mysqli_query($conexao, $pontuacao_final)
        or die("Falha na execução do cadastro (insert pontuação)");

    echo "<div class='box'>";
    echo "<div class='results'>";
    echo  "<h2>Resultados</h2>";
    echo  "<p class='hits'>Respostas certas: $pontuacao</p>";
    echo  "<p class='error'>Respostas erradas: $erros</p>";
    echo  "<div class='buttons'>";
    echo  "<a class='button' href='/fabrica-de-software-backend/'> Voltar ao menu</a>";
    echo  "</div>";
    echo   "</div>";
    echo   "</div>";
    ?>

</body>

</html>