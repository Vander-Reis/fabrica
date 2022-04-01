<?php
include('./conexao.php');

if (isset($_POST['userEmail']) || isset($_POST['userPass'])) {

    if (strlen($_POST['userEmail']) == 0) {
        echo "Preencha seu e-mail";
    } else if (strlen(md5($_POST['userPass'])) == 0) {
        echo "Preencha com sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['userEmail']);
        $pass = $mysqli->real_escape_string(md5($_POST['userPass']));

        $sql_code = "SELECT * FROM tb_login where email = '$email' and senha = '$pass'";

        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysql->error);


        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

        

            header('Location: /fabrica/frontend/views/materias.php');
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos.";
        }
    }
}
?>


<!DOCTYPE html>

<head>
    <title>Login Fábrica</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- View Port -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cadastro.css">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@500;700&display=swap" rel="stylesheet">
</head>

<body>
    <div id="home" class="content">
        <header>
            <a href="/fabrica/">
                Fábrica de software
            </a>
        </header>

        <div id="bg">
            <div class="ball top"></div>
            <div class="ball bottom"></div>
        </div>

        <main>
            <div class="container">
                <section>
                    <h2>Faça seu login no fábrica</h2>

                    <form method="post" action="./login.php">
                        <label class="sr-only" for="room-id">E-mail</label>
                        <input type="email" name="userEmail" id="room-id" placeholder="E-mail" required/>

                        <label class="sr-only" for="room">senha</label>
                        <input type="password" name="userPass" id="room" placeholder="Senha" required/>
                        <button>
                            <img src="./images/enter-room.svg" alt="Entrar na sala">
                            Entrar na sala
                        </button>
                    </form>
                </section>

                <div class="separator">
                    <div></div>
                    <div>ou</div>
                    <div></div>
                </div>

                <section>

                    <h2>Crie seu usuário agora no fábrica</h2>

                    <a href="./cadastro.php" class="button outlined">
                        <img src="./images/users.svg" alt="Criar Sala">
                        Criar usuário
                    </a>

                </section>
            </div>
        </main>
    </div>
</body>

</html>
