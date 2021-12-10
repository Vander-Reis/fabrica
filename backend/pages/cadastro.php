<!DOCTYPE html>

<head> 
    <title>Criar Sala - Rocket.Q</title>
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
            <a href="/fabrica-de-software-backend/">
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
                    <h2>Crie seu usuário no fábrica</h2>

                    <form method="post" action="./cadastrar.php">
                        <label for="name" class="sr-only">Nome</label>
                        <input type="text" name="userName" id="name" placeholder="Infome seu nome" required>


                        <label for="idade" class="sr-only">Idade</label>
                        <input type="number" name="userIdade" id="idade" placeholder="Infome sua idade" required>

                        <label for="escola" class="sr-only">Escola</label>

                        <?php

                        include("./conexao.php");

                        $consulta = "SELECT id, nome FROM tb_escola";
                        $resultado = mysqli_query($mysqli, $consulta);
                        $num = mysqli_num_rows($resultado);
                        echo "<select name='cmbAlunos'>";
                        echo "<option value='0'>Escolha uma escola</option>";
                        for ($i = 0; $i < $num; $i++) {
                            list($codigo, $nome) = mysqli_fetch_row($resultado);
                            echo "<option value='$codigo'>$nome</option>";
                        }
                        echo "</select>";
                        mysqli_close($mysqli);
                        ?>


                        <label for="email" class="sr-only">E-mail</label>
                        <input type="email" name="userEmail" id="email" placeholder="Infome seu e-mail" required>


                        <label for="password" class="sr-only">Senha</label>
                        <input type="password" name="userPass" id="password" placeholder="Infome sua senha" required>

                        <button>
                            <img src="./images//users-white.svg" alt="Entrar na sala" />
                            Entrar no fábrica
                        </button>

                    </form>
                </section>
            </div>
        </main>
    </div>
</body>

</html>