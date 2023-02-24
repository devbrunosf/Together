<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&family=Noto+Sans+JP:wght@300&family=Raleway:wght@200&display=swap" rel="stylesheet">

    <meta name="description" content="Site em desenvolvimento para trabalhos avaliativos da Faculdade.">
    <link rel="stylesheet" href="css/cadastrar2.css">
    <title>Together</title>
</head>

<body>
    <header>
        <div><a href="index.php">Together</a></div>
        <ul>
            <li><a href="about.php">Como Funciona?</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="cadastrar.php">Cadastrar</a></li>
        </ul>
    </header>

    <main>
        <div>
            <form id="formulario" action="php/cadastrar2.php" method="POST">

                <div id="areas">
                    <h1>Areas: </h1>
                    <span>Marque aqui sua area!</span>

                    <input type="checkbox" id="front" name="front" value="front">
                    <label for="front">Front-End</label>

                    <input type="checkbox" id="back" name="back" value="back">
                    <label for="back">Back-End</label>

                    <input type="checkbox" id="full" name="full" value="full">
                    <label for="full">Full-Stack</label>
                </div>

                <div id="linguagens">
                    <h1>Linguagens: </h1>
                    <span>Marque suas linguagens!</span>

                    <input type="checkbox" id="html" name="html" value="html">
                    <label for="html">HTML</label>

                    <input type="checkbox" id="css" n<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&family=Noto+Sans+JP:wght@300&family=Raleway:wght@200&display=swap" rel="stylesheet">

    <meta name="description" content="Site em desenvolvimento para trabalhos avaliativos da Faculdade.">
    <link rel="stylesheet" href="css/cadastrar2.css">
    <title>Together</title>
</head>

<body>
    <header>
        <div><a href="index.php">Together</a></div>
        <ul>
            <li><a href="about.php">Como Funciona?</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="cadastrar.php">Cadastrar</a></li>
        </ul>
    </header>

    <main>
        <div>
            <form id="formulario" action="php/cadastrar2.php" method="POST">

                <div id="areas">
                    <h1>Areas: </h1>
                    <span>Marque aqui sua area!</span>

                    <input type="checkbox" id="front" name="front" value="front">
                    <label for="front">Front-End</label>

                    <input type="checkbox" id="back" name="back" value="back">
                    <label for="back">Back-End</label>

                    <input type="checkbox" id="full" name="full" value="full">
                    <label for="full">Full-Stack</label>
                </div>

                <div id="linguagens">
                    <h1>Linguagens: </h1>
                    <span>Marque suas linguagens!</span>

                    <input type="checkbox" id="html" name="html" value="html">
                    <label for="html">HTML</label>

                    <input type="checkbox" id="css" name="css" value="css">
                    <label for="css">CSS</label>

                    <input type="checkbox" id="php" name="php" value="php">
                    <label for="php">PHP</label>

                    <input type="checkbox" id="javascript" name="javascript" value="javascript">
                    <label for="javascript">JavaScript</label>
                </div>

                <div id="frameworks">
                    <h1>Frameworks: </h1>
                    <span>Marque suas frameworks!</span>

                    <input type="checkbox" id="boot" name="boot" value="boot">
                    <label for="boot">Bootstrap</label>

                    <input type="checkbox" id="node" name="node" value="node">
                    <label for="node">Node.js</label>

                    <input type="checkbox" id="vanilla" name="vanilla" value="vanilla">
                    <label for="vanilla">Vanilla</label>

                    <input type="checkbox" id="scss" name="scss" value="scss">
                    <label for="scss">SCSS</label>
                </div>

                <h1>Qual seu Nível de Conhecimento em: </h1>
                <h1> Programação
                    <input class="range" type="range" name="programacao" min="1" max="100" id="range" value="50">
                </h1>
                <h1> Desenvolvimento
                    <input class="range" type="range" name="desenvolvimento" min="1" max="100" id="range" value="50">
                </h1>
                <h1> Design
                    <input class="range" type="range" name="design" min="1" max="100" id="range" value="50">
                </h1>

                <input type="submit">
            </form>
        </div>
        <div>
            <img src="img/section2.png" alt="">
        </div>
    </main>
</body>

</html>