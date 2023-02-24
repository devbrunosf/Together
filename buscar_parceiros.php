{
}<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2&family=Noto+Sans+JP:wght@300&family=Raleway:wght@200&display=swap" rel="stylesheet">

    <meta name="description" content="Site em desenvolvimento para trabalhos avaliativos da Faculdade.">
    <link rel="stylesheet" href="css/style_parceiros.css">
    <title>Together</title>
</head>

<body>

    <header>
        <div><a href="index.html">Together</a></div>
        <ul>
            <li><a href="#">Como Funciona?</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="cadastrar.html">Cadastrar</a></li>
        </ul>
    </header>

    <main>
        <div class="projetos">
            <p>Buscar Projetos!</p>
            <form method="$_POST" action="resultados.php">
                <select id="projetos">
                    <option value="0">Projetos para:</option>
                    <option value="1" name="front">Front-End</option>
                    <option value="2" name="back">Back-End</option>
                    <option value="3" name="full">Full-Stack</option>
                    <option value="4" name="prog">Programador</option>
                </select>
                <select>
                    <option value="0">Linguagens:</option>
                    <option value="1" name="html">HTML</option>
                    <option value="2" name="css">CSS</option>
                    <option value="3" name="php">PHP</option>
                    <option value="4" name="js">JAVASCRIPT</option>
                </select>
                <select>
                    <option value="0">Frameworks:</option>
                    <option value="1" name="angular">Angular</option>
                    <option value="2" name="react">React</option>
                    <option value="3" name="materialize">Materialize</option>
                    <option value="4" name="bootstrap">Bootstrap</option>
                </select>
                <input type="submit" value="Buscar">
            </form>
        </div>

        <div class="resultados">
            <?php

            include "php/conecta.php";

            $busca_area = $_POST['projeto'];
            $sql = "select * from usuario WHERE area like '%$busca_area%'";
            $resultado = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_assoc($resultado)) {
            ?>
                <div class="resultado">
                    <p><?php echo $linha['nome'] ?> está procurando Parceiros para: </p>
                    <p><?php echo $linha['area'] ?> na area</p>
                    <p><?php echo $linha['linguagem'] ?> linguagem</p>
                    <p><?php echo $linha['framework'] ?> framework</p>
                </div>
            <?php
            }
            ?>
        </div>
    </main>

    <footer></footer>
</body>

</html>