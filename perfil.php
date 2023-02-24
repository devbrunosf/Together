<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&family=Noto+Sans+JP:wght@300&family=Raleway:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6e10b7e369.js" crossorigin="anonymous"></script>

    <meta name="description" content="Site em desenvolvimento para trabalhos avaliativos da Faculdade.">
    <link rel="stylesheet" href="css/perfil.css">
    <title>Together</title>
</head>

<body><!-- Página de perfil com menu de navegação (header) e no conteúdo principal (main), um formulário... -->
    <header>
        <div><a href="index.php">Together</a></div>
        <input placeholder="Encontar Parceiros"></input>
        <ul>
            <?php
            session_start();

            // Login com área restrita controlada por variável de sessão...

            if ((!isset($_SESSION['email'])) && (!isset($_SESSION['logado']))) { // Se o email e a variavel 'logado' não estiverem preenchidas (definidos), subentende-se que o usúario não está logado e será direcionado para a página de 'login' não liberando acesso a página de perfil...

                header('Location: login.php');
            } // Login com área restrita controlada por variável de sessão...

            if (empty($_SESSION["email"])) { // Se o email estiver vazio, não há usuário não logado...
                echo '<li><a href="#aside">Como Funciona?</a></li>';
                echo '<li><a href="login.php">Login</a></li>';
                echo '<li><a href="cadastrar.php">Cadastrar</a></li>';
            } else { // Menu especial para usuários logados com direc<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&family=Noto+Sans+JP:wght@300&family=Raleway:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6e10b7e369.js" crossorigin="anonymous"></script>

    <meta name="description" content="Site em desenvolvimento para trabalhos avaliativos da Faculdade.">
    <link rel="stylesheet" href="css/perfil.css">
    <title>Together</title>
</head>

<body><!-- Página de perfil com menu de navegação (header) e no conteúdo principal (main), um formulário... -->
    <header>
        <div><a href="index.php">Together</a></div>
        <input placeholder="Encontar Parceiros"></input>
        <ul>
            <?php
            session_start();

            // Login com área restrita controlada por variável de sessão...

            if ((!isset($_SESSION['email'])) && (!isset($_SESSION['logado']))) { // Se o email e a variavel 'logado' não estiverem preenchidas (definidos), subentende-se que o usúario não está logado e será direcionado para a página de 'login' não liberando acesso a página de perfil...

                header('Location: login.php');
            } // Login com área restrita controlada por variável de sessão...

            if (empty($_SESSION["email"])) { // Se o email estiver vazio, não há usuário não logado...
                echo '<li><a href="#aside">Como Funciona?</a></li>';
                echo '<li><a href="login.php">Login</a></li>';
                echo '<li><a href="cadastrar.php">Cadastrar</a></li>';
            } else { // Menu especial para usuários logados com direcionamento para página de 'editar perfil' e link para 'logout'...
                echo '<li><a href="editar_perfil.php">Editar Perfil</a></li>';
                echo "<li><a href='php/logout.php'> Logout </a></li>";
            }
            ?>
        </ul>
    </header>

    <main>
        <section class="perfil">
            <div class="container">
                <form method=POST action="php/muda_foto.php" enctype="multipart/form-data">
                    <div class="img">
                        <?php
                        include "php/conecta.php";

                        $codigo = $_SESSION["cod_usu"];
                        $sql = "select * from imagens where cod_usu='$codigo'";
                        $result = mysqli_query($conexao, $sql);

                        if (mysqli_num_rows($result) == 1) {
                            $linha = mysqli_fetch_assoc($result);
                            $img = $linha['imagem'];
                        }

                        if (empty($img)) { // Se o usuário ainda não estiver definido uma imagem será apresentada uma imagem definida pelo programador...
                            echo '<label for="file"><img src="img/camera.jpg" alt="Foto de Perfil"></label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                            <input type="file" name="arquivo" id="file">
                            <input type="submit" name="acao" value="Enviar Foto">';
                        } else { // Se o usuário já tiver definido uma imagem, ela que será apresentada...
                            echo '<label for="file"><img src="imagens/' . $img . '" alt=""></label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                            <input type="file" name="arquivo" id="file">
                            <input type="submit" name="acao" value="Enviar Foto">';
                        }
                        ?>
                    </div>
                </form>
                <?php

                echo '<div class="info">';
                echo '<p id="nome">' . $_SESSION["nome"] . '</p>';
                echo '<p id="area">' . $_SESSION["front"] . $_SESSION["back"] . $_SESSION["full"] . '</p></div>'; // Só será possivel definir uma area de atuação...
                
                ?>
            </div>
            <div class="parceiros">
                <h1>Parceiros</h1>

                <div><img src="img/persona_2.png" alt="">
                    <p>Carlos Silva<span>Back-End</span></p>
                </div>

                <div><img src="img/persona_4.png" alt="">
                    <p>Maria Luiza<span>Designer</span></p>
                </div>

                <div><img src="img/persona_5.png" alt="">
                    <p>Paulo Gomes<span>Front-End</span></p>
                </div>

                <div><img src="img/persona_3.png" alt="">
                    <p>Rafaella Costa<span>Full-Stack</span></p>
                </div>
            </div>
        </section>

        <section class="aside">
            <div>
                <h1>Biografia</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
            </div>
            <div>
                <h1>Skills</h1>
                <?php
                echo '<p> Programação  ( ' . $_SESSION["programacao"] . ' )<input type="range" min="1" max="100" class="range" id="prog" value=' . $_SESSION["programacao"] . '></p>';

                echo '<p> Desenvolvimento ( ' . $_SESSION["desenvolvimento"] . ' )<input type="range" min="1" max="100" class="range" id="desv" value=' . $_SESSION["desenvolvimento"] . '></p>';

                echo '<p> Design ( ' . $_SESSION["design"] . ' )<input type="range" min="1" max="100" class="range" id="design" value=' . $_SESSION["design"] . ' style></p>';
                ?>
            </div>
            <div>
                <h1>Projetos Disponíveis</h1>
                <p>Projeto Diponível para Back-End.</p>
                <p>Projeto Disponível para Designer.</p>
            </div>
        </section>
    </main>
</body>

</html>