<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&family=Noto+Sans+JP:wght@300&family=Raleway:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/perfil.css">
    <title>Together</title>

    <script src="https://kit.fontawesome.com/6e10b7e369.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div><a href="index.php">Together</a></div>
        <li>
            <?php
            session_start();

            //login com área restrita controlada por variável de sessão

            if ((!isset($_SESSION['email'])) && (!isset($_SESSION['logado']))) {

                header('Location: login.php');
            } //login com área restrita controlada por variável de sessão

            if (empty($_SESSION["email"])) {
                echo '<ul><a href="#aside">Como Funciona?</a></ul>';
                echo '<ul><a href="login.php">Login</a></ul>';
                echo '<ul><a href="cadastrar.php">Cadastrar</a></ul>';
            } else {
                echo "<ul><a href='perfil.php'> Olá " . $_SESSION["nome"] . "</a></ul>";
                echo '<ul><a href="editar_perfil.php">Editar Perfil</a></ul>';
                echo "<ul><a href='php/logout.php'> Logout </a></ul>";
            }
            ?>
        </li>
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

                        if (empty($img)) {
                            echo '<label for="file"><img src="img/camera.jpg" alt="Foto de Perfil"></label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                            <input type="file" name="arquivo" id="file">
                            <input type="submit" name="acao" value="Enviar Foto">';
                        } else {
                            echo '<label for="file"><img src="imagens/' . $img . '" alt=""></label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                            <input type="file" name="arquivo" id="file">
                            <input type="submit" name="acao" value="Enviar Foto">';
                        }
                        ?>
                    </div>
                </form>
                <?php
                echo '<div class="profile">';
                echo '<p id="nome">' . $_SESSION["nome"] . '</p>';
                echo '<p id="area">' . $_SESSION["front"]  . " " . $_SESSION["back"] . " " . $_SESSION["full"] . '</p></div>';
                echo '<p id="desc">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.“ </p>';
                echo '<div class="inside">';
                echo '<span>Linguagens: </span><br>';

                if (!(empty($_SESSION["html"]))) {
                    echo '<p>' . $_SESSION["html"] . '</p>';
                }
                if (!(empty($_SESSION["css"]))) {
                    echo '<p>' . $_SESSION["css"] . '</p>';
                }
                if (!(empty($_SESSION["php"]))) {
                    echo '<p>' . $_SESSION["php"] . '</p>';
                }
                if (!(empty($_SESSION["javascript"]))) {
                    echo '<p>' . $_SESSION["javascript"] . '</p>';
                }

                echo '<br><span>Framework: </span><br>';
                if (!(empty($_SESSION["boot"]))) {
                    echo '<p>' . $_SESSION["boot"] . '</p>';
                }
                if (!(empty($_SESSION["node"]))) {
                    echo '<p>' . $_SESSION["node"] . '</p>';
                }
                if (!(empty($_SESSION["vanilla"]))) {
                    echo '<p>' . $_SESSION["vanilla"] . '</p>';
                }
                if (!(empty($_SESSION["scss"]))) {
                    echo '<p>' . $_SESSION["scss"] . '</p>';
                }
                echo '</div>';
                ?>
            </div>
        </section>

        <section id="projetos">
            <div>
                <h1>Bio</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia sed temporibus, totam minima maiores, veritatis delectus omnis modi, animi nostrum exercitationem quisquam. Obcaecati esse dicta reiciendis officia aliquam velit possimus.</p>
            </div>
            <div>
                <h1>Skills</h1>
                <?php
                echo '<p> Programação  ( ' . $_SESSION["programacao"] . ' )<input type="range" min="1" max="100" class="range" id="prog" value=' . $_SESSION["programacao"] . '></p>';
                //echo '<p><span id="progdesg">Programação: ' . $_SESSION["programacao"] . ' </span></p>';

                echo '<p> Desenvolvimento ( ' . $_SESSION["desenvolvimento"] . ' )<input type="range" min="1" max="100" class="range" id="desv" value=' . $_SESSION["desenvolvimento"] . '></p>';
                //echo '<p><span id="progdesg">Desenvolvimento: ' . $_SESSION["desenvolvimento"] . ' </span></p>';

                echo '<p> Design ( ' . $_SESSION["design"] . ' )<input type="range" min="1" max="100" class="range" id="design" value=' . $_SESSION["design"] . ' style></p>';
                //echo '<p><span id="progdesg">Design: ' . $_SESSION["design"] . ' </span></p>';
                ?>
            </div>
            <div>
                <h1>Projetos Desenvolvidos</h1>
                <p>Lorem ipsum dolor sit amet co<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&family=Noto+Sans+JP:wght@300&family=Raleway:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/perfil.css">
    <title>Together</title>

    <script src="https://kit.fontawesome.com/6e10b7e369.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div><a href="index.php">Together</a></div>
        <li>
            <?php
            session_start();

            //login com área restrita controlada por variável de sessão

            if ((!isset($_SESSION['email'])) && (!isset($_SESSION['logado']))) {

                header('Location: login.php');
            } //login com área restrita controlada por variável de sessão

            if (empty($_SESSION["email"])) {
                echo '<ul><a href="#aside">Como Funciona?</a></ul>';
                echo '<ul><a href="login.php">Login</a></ul>';
                echo '<ul><a href="cadastrar.php">Cadastrar</a></ul>';
            } else {
                echo "<ul><a href='perfil.php'> Olá " . $_SESSION["nome"] . "</a></ul>";
                echo '<ul><a href="editar_perfil.php">Editar Perfil</a></ul>';
                echo "<ul><a href='php/logout.php'> Logout </a></ul>";
            }
            ?>
        </li>
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

                        if (empty($img)) {
                            echo '<label for="file"><img src="img/camera.jpg" alt="Foto de Perfil"></label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                            <input type="file" name="arquivo" id="file">
                            <input type="submit" name="acao" value="Enviar Foto">';
                        } else {
                            echo '<label for="file"><img src="imagens/' . $img . '" alt=""></label>
                            <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                            <input type="file" name="arquivo" id="file">
                            <input type="submit" name="acao" value="Enviar Foto">';
                        }
                        ?>
                    </div>
                </form>
                <?php
                echo '<div class="profile">';
                echo '<p id="nome">' . $_SESSION["nome"] . '</p>';
                echo '<p id="area">' . $_SESSION["front"]  . " " . $_SESSION["back"] . " " . $_SESSION["full"] . '</p></div>';
                echo '<p id="desc">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.“ </p>';
                echo '<div class="inside">';
                echo '<span>Linguagens: </span><br>';

                if (!(empty($_SESSION["html"]))) {
                    echo '<p>' . $_SESSION["html"] . '</p>';
                }
                if (!(empty($_SESSION["css"]))) {
                    echo '<p>' . $_SESSION["css"] . '</p>';
                }
                if (!(empty($_SESSION["php"]))) {
                    echo '<p>' . $_SESSION["php"] . '</p>';
                }
                if (!(empty($_SESSION["javascript"]))) {
                    echo '<p>' . $_SESSION["javascript"] . '</p>';
                }

                echo '<br><span>Framework: </span><br>';
                if (!(empty($_SESSION["boot"]))) {
                    echo '<p>' . $_SESSION["boot"] . '</p>';
                }
                if (!(empty($_SESSION["node"]))) {
                    echo '<p>' . $_SESSION["node"] . '</p>';
                }
                if (!(empty($_SESSION["vanilla"]))) {
                    echo '<p>' . $_SESSION["vanilla"] . '</p>';
                }
                if (!(empty($_SESSION["scss"]))) {
                    echo '<p>' . $_SESSION["scss"] . '</p>';
                }
                echo '</div>';
                ?>
            </div>
        </section>

        <section id="projetos">
            <div>
                <h1>Bio</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia sed temporibus, totam minima maiores, veritatis delectus omnis modi, animi nostrum exercitationem quisquam. Obcaecati esse dicta reiciendis officia aliquam velit possimus.</p>
            </div>
            <div>
                <h1>Skills</h1>
                <?php
                echo '<p> Programação  ( ' . $_SESSION["programacao"] . ' )<input type="range" min="1" max="100" class="range" id="prog" value=' . $_SESSION["programacao"] . '></p>';
                //echo '<p><span id="progdesg">Programação: ' . $_SESSION["programacao"] . ' </span></p>';

                echo '<p> Desenvolvimento ( ' . $_SESSION["desenvolvimento"] . ' )<input type="range" min="1" max="100" class="range" id="desv" value=' . $_SESSION["desenvolvimento"] . '></p>';
                //echo '<p><span id="progdesg">Desenvolvimento: ' . $_SESSION["desenvolvimento"] . ' </span></p>';

                echo '<p> Design ( ' . $_SESSION["design"] . ' )<input type="range" min="1" max="100" class="range" id="design" value=' . $_SESSION["design"] . ' style></p>';
                //echo '<p><span id="progdesg">Design: ' . $_SESSION["design"] . ' </span></p>';
                ?>
            </div>
            <div>
                <h1>Projetos Desenvolvidos</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque nostrum illo dolor praesentium. Architecto excepturi nam ea in voluptatem doloremque, doloribus perferendis assumenda tempore pariatur tempora repellendus at voluptas error!</p>
            </div>
            <div>
                <h1>Parceiros</h1>
                <p>Parceiros</p>
                <p>Parceiros</p>
                <p>Parceiros</p>
                <p>Parceiros</p>
                <p>Parceiros</p>
                <p>Parceiros</p>
                <p>Parceiros</p>
            </div>
        </section>
    </main>
</body>

<script src="/js/main.js"></script>

</html>