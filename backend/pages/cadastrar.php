<?php

    include("./conexao.php");

    $nome = mysqli_real_escape_string($mysqli, trim($_POST['userName']));
    $idade = mysqli_real_escape_string($mysqli, trim($_POST['userIdade']));
    $email = mysqli_real_escape_string($mysqli, trim($_POST['userEmail']));
    $senha = mysqli_real_escape_string($mysqli, trim(md5($_POST['userPass'])));
    $escola = mysqli_real_escape_string($mysqli, trim($_POST['cmbAlunos']));

    $sql = "SELECT COUNT(*) AS total FROM tb_login where email = '$email'";

    $result = mysqli_query($mysqli, $sql);

    $row = mysqli_fetch_assoc($result);

    if($row['total'] == 1) {
        echo "cheguei aqui";
    } else {

        $sql = "INSERT INTO tb_login(nome, idade, email, senha, id_escola) VALUES ('$nome', '$idade', '$email', '$senha', $escola)";

        $sql = mysqli_query($mysqli, $sql)
            or die("Houve erro na gravação dos dados, por favor, clique em voltar e verifique os campos obrigatórios!");   


        echo "<script>alert('Cadastro efetuado com sucesso!') </script>";    

        echo "<script>javascript:window.location='/fabrica-de-software-backend/backend/pages/login.php'</script>"; 

        mysqli_close($mysqli);
    }

?>