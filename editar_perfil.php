<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&family=Noto+Sans+JP:wght@300&family=Raleway:wght@200&display=swap" rel="stylesheet">

    <meta name="description" content="Site em desenvolvimento para trabalhos avaliativos da Faculdade.">
    <link rel="stylesheet" href="css/editar.css">
    <title>Together</title>

    <script src="https://kit.fontawesome.com/6e10b7e369.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div><a href="index.php">Together</a></div>
        <ul>
            <?php
            session_start();
            if (empty($_SESSION["email"])) { // Se o email estiver vazio, mostra menu para usuários não logados...
                echo '<li><a href="#aside">Como Funciona?</a></li>';
                echo '<li><a href="login.php">Login</a></li>';
                echo '<li><a href="cadastrar.php">Cadastrar</a></li>';
            } else {  // Menu especial para usuários logados exibi o nome do usuáio e link para 'logout'...
                echo "<li> </li>";
                echo "<li><a href='index.php'> Olá " . $_SESSION["nome"] . "</a></li>";
                echo "<li><a href='php/logout.php'> Logout </a></li>";
            }
            ?>
        </ul>
    </header>

    <main>
        <div>
            <form action="php/editar_perfil.php" method="POST">
                <?php // Atribuindo as variáveis de sessão a novas variáveis...
                $nome = $_SESSION["nome"];
                $email = $_SESSION["email"];
                $senha = $_SESSION["senha"];

                $front = $_SESSION["front"];
                $back = $_SESSION["back"];
                $full = $_SESSION["full"];

                $html = $_SESSION["html"];
                $css = $_SESSION["css"];
                $php = $_SESSION["php"];
                $javascript = $_SESSION["javascript"];

                $boot = $_SESSION["boot"];
                $node = $_SESSION["node"];
                $vanilla = $_SESSION["vanilla"];
                $scss = $_SESSION["scss"];

                $programacao = $_SESSION["programacao"];
                $desenvolvimento = $_SESSION["desenvolvimento"];
                $design = $_SESSION["design"];
                ?>

                <div id="areas">
                    <h1>Areas: </h1>
                    <span>Marque aqui sua area!</span>

                    <?php
                    if (empty($front)) {
                        echo '<input type="checkbox" id="front" name="front" value="front"><!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&family=Noto+Sans+JP:wght@300&family=Raleway:wght@200&display=swap" rel="stylesheet">

    <meta name="description" content="Site em desenvolvimento para trabalhos avaliativos da Faculdade.">
    <link rel="stylesheet" href="css/editar.css">
    <title>Together</title>

    <script src="https://kit.fontawesome.com/6e10b7e369.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div><a href="index.php">Together</a></div>
        <ul>
            <?php
            session_start();
            if (empty($_SESSION["email"])) { // Se o email estiver vazio, mostra menu para usuários não logados...
                echo '<li><a href="#aside">Como Funciona?</a></li>';
                echo '<li><a href="login.php">Login</a></li>';
                echo '<li><a href="cadastrar.php">Cadastrar</a></li>';
            } else {  // Menu especial para usuários logados exibi o nome do usuáio e link para 'logout'...
                echo "<li> </li>";
                echo "<li><a href='index.php'> Olá " . $_SESSION["nome"] . "</a></li>";
                echo "<li><a href='php/logout.php'> Logout </a></li>";
            }
            ?>
        </ul>
    </header>

    <main>
        <div>
            <form action="php/editar_perfil.php" method="POST">
                <?php // Atribuindo as variáveis de sessão a novas variáveis...
                $nome = $_SESSION["nome"];
                $email = $_SESSION["email"];
                $senha = $_SESSION["senha"];

                $front = $_SESSION["front"];
                $back = $_SESSION["back"];
                $full = $_SESSION["full"];

                $html = $_SESSION["html"];
                $css = $_SESSION["css"];
                $php = $_SESSION["php"];
                $javascript = $_SESSION["javascript"];

                $boot = $_SESSION["boot"];
                $node = $_SESSION["node"];
                $vanilla = $_SESSION["vanilla"];
                $scss = $_SESSION["scss"];

                $programacao = $_SESSION["programacao"];
                $desenvolvimento = $_SESSION["desenvolvimento"];
                $design = $_SESSION["design"];
                ?>

                <div id="areas">
                    <h1>Areas: </h1>
                    <span>Marque aqui sua area!</span>

                    <?php
                    if (empty($front)) {
                        echo '<input type="checkbox" id="front" name="front" value="front">
                        <label for="front">Front-End</label>';
                    } else {
                        echo '<input type="checkbox" id="front" name="front" value="front" checked>
                        <label for="front">Front-End</label>';
                    }
                    ?>

                    <?php
                    if (empty($back)) {
                        echo '<input type="checkbox" id="back" name="back" value="back">
                        <label for="back">Back-End</label>';
                    } else {
                        echo '<input type="checkbox" id="back" name="back" value="back" checked>
                        <label for="back">Back-End</label>';
                    }
                    ?>

                    <?php
                    if (empty($full)) {
                        echo '<input type="checkbox" id="full" name="full" value="full">
                        <label for="full">Full-Stack</label>';
                    } else {
                        echo '<input type="checkbox" id="full" name="full" value="full" checked>
                        <label for="full">Full-Stack</label>';
                    }
                    ?>
                </div>

                <div id="linguagens">
                    <h1>Linguagens: </h1>
                    <span>Marque suas linguagens!</span>

                    <?php
                    if (empty($html)) {
                        echo '<input type="checkbox" id="html" name="html" value="html">
                        <label for="html">HTML</label>';
                    } else {
                        echo '<input type="checkbox" id="html" name="html" value="html" checked>
                        <label for="html">HTML</label>';
                    }
                    ?>

                    <?php
                    if (empty($css)) {
                        echo '<input type="checkbox" id="css" name="css" value="css">
                        <label for="css">CSS</label>';
                    } else {
                        echo '<input type="checkbox" id="css" name="css" value="css" checked>
                        <label for="css">CSS</label>';
                    }
                    ?>

                    <?php
                    if (empty($php)) {
                        echo '<input type="checkbox" id="php" name="php" value="php">
                        <label for="php">PHP</label>';
                    } else {
                        echo '<input type="checkbox" id="php" name="php" value="php" checked>
                        <label for="php">PHP</label>';
                    }
                    ?>

                    <?php
                    if (empty($javascript)) {
                        echo '<input type="checkbox" id="javascript" name="javascript" value="javascript">
                        <label for="javascript">JavaScript</label>';
                    } else {
                        echo '<input type="checkbox" id="javascript" name="javascript" value="javascript" checked>
                        <label for="javascript">JavaScript</label>';
                    }
                    ?>
                </div>

                <div id="frameworks">
                    <h1>Frameworks: </h1>
                    <span>Marque suas frameworks!</span>

                    <?php
                    if (empty($boot)) {
                        echo '<input type="checkbox" id="boot" name="boot" value="boot">
                        <label for="boot">Bootstrap</label>';
                    } else {
                        echo '<input type="checkbox" id="boot" name="boot" value="boot" checked>
                        <label for="boot">Bootstrap</label>';
                    }
                    ?>

                    <?php
                    if (empty($node)) {
                        echo '<input type="checkbox" id="node" name="node" value="node">
                        <label for="node">Node.js</label>';
                    } else {
                        echo '<input type="checkbox" id="node" name="node" value="node" checked>
                        <label for="node">Node.js</label>';
                    }
                    ?>

                    <?php
                    if (empty($vanilla)) {
                        echo '<input type="checkbox" id="vanilla" name="vanilla" value="vanilla">
                        <label for="vanilla">Vanilla</label>';
                    } else {
                        echo '<input type="checkbox" id="vanilla" name="vanilla" value="vanilla" checked>
                        <label for="vanilla">Vanilla</label>';
                    }
                    ?>

                    <?php
                    if (empty($scss)) {
                        echo '<input type="checkbox" id="scss" name="scss" value="scss">
                        <label for="scss">SCSS</label>';
                    } else {
                        echo '<input type="checkbox" id="scss" name="scss" value="scss" checked>
                        <label for="scss">SCSS</label>';
                    }
                    ?>
                </div>

                <h1>Qual seu Nível de Conhecimento em: </h1>
                <?php
                echo '<h1>Programação ( '. $_SESSION["programacao"] .' ) <input class="range" type="range" name="programacao" min="1" max="100" value='. $_SESSION["programacao"] .'></h1>';

                echo '<h1>Desenvolvimento ( ' . $_SESSION["desenvolvimento"] . ' )<input class="range" type="range" name="desenvolvimento" min="1" max="100" value=' . $_SESSION["desenvolvimento"] . '></h1>';

                echo '<h1>Design ( ' . $_SESSION["design"] . ' )<input class="range" type="range" name="design" min="1" max="100" value=' . $_SESSION["design"] . '></h1>';
                ?>

                <input type="submit">
            </form>
        </div>

        <div>
            <img src="img/section2.png" alt="">
        </div>
    </main>
</body>

</html>