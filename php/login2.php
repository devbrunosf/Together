<?php
session_start();

$email = $_POST["email"];
$senha = $_POST["senha"];

if (!(empty($email) or empty($senha))) {
    include "conecta.php";

    $sql = "select * from usuario where email='$email' and senha='$senha'";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) == 1) {

        $_SESSION["logado"] = true;
        $_SESSION["email"] = $email;

        $linha = mysqli_fetch_assoc($resultado);
        $_SESSION["nome"] = $linha['nome'];
        $_SESSION["email"] = $linha['email'];
        $_SESSION["senha"] = $linha['senha'];
        $_SESSION["cod_usu"] = $linha['cod_usu'];

        $cod_usu = $linha["cod_usu"];

        $sql_busca = "select * from areas, linguagens, frameworks, habilidades where areas.cod_usu='$cod_usu' and linguagens.cod_usu='$cod_usu' and frameworks.cod_usu='$cod_usu' and habilidades.cod_usu='$cod_usu'";
        $busca = mysqli_query($conexao, $sql_busca);
        $linhas = mysqli_fetch_assoc($busca);

        $_SESSION["front"] = $linhas['front'];
        $_SESSION["back"] = $linhas['back'];
        $_SESSION["full"] = $linhas['full'];

        $_SESSION["html"] = $linhas['html'];
        $_SESSION["css"] = $linhas['css'];
        $_SESSION["php"] = $linhas['php'];
        $_SESSION["javascript"] = $linhas['javascript'];

        $_SESSION["boot"] = $linhas['boot'];
        $_SESSION["node"] = $linhas['node'];
        $_SESSION["vanilla"] = $linhas['vanilla'];
        $_SESSION["scss"] = $linhas['scss'];

        $_SESSION["programacao"] = $linhas['programacao'];
        $_SESSION["desenvolvimento"] = $linhas['desenvolvimento'];
        $_SESSION["design"] = $linhas['design'];

        header('Location: ../perfil.php'); // Redirecionamento para o perfil...
    } else { // Se não ouver retorno de email e senha corespondentes no banco de dados...
        header("Location: ../login.php");
    }
} else { // Se email e senha não estiverem preenchidos...
    echo "Preencha campos email e senha";
    header("Location: ../login.php");
    die();
}
                                                                                                                                                                                                                                                                                                                                                                    <?php
session_start();

$email = $_POST["email"];
$senha = $_POST["senha"];

if (!(empty($email) or empty($senha))) {
    include "conecta.php";

    $sql = "select * from usuario where email='$email' and senha='$senha'";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) == 1) {

        $_SESSION["logado"] = true;
        $_SESSION["email"] = $email;

        $linha = mysqli_fetch_assoc($resultado);
        $_SESSION["nome"] = $linha['nome'];
        $_SESSION["email"] = $linha['email'];
        $_SESSION["senha"] = $linha['senha'];
        $_SESSION["cod_usu"] = $linha['cod_usu'];

        $cod_usu = $linha["cod_usu"];

        $sql_busca = "select * from areas, linguagens, frameworks, habilidades where areas.cod_usu='$cod_usu' and linguagens.cod_usu='$cod_usu' and frameworks.cod_usu='$cod_usu' and habilidades.cod_usu='$cod_usu'";
        $busca = mysqli_query($conexao, $sql_busca);
        $linhas = mysqli_fetch_assoc($busca);

        $_SESSION["front"] = $linhas['front'];
        $_SESSION["back"] = $linhas['back'];
        $_SESSION["full"] = $linhas['full'];

        $_SESSION["html"] = $linhas['html'];
        $_SESSION["css"] = $linhas['css'];
        $_SESSION["php"] = $linhas['php'];
        $_SESSION["javascript"] = $linhas['javascript'];

        $_SESSION["boot"] = $linhas['boot'];
        $_SESSION["node"] = $linhas['node'];
        $_SESSION["vanilla"] = $linhas['vanilla'];
        $_SESSION["scss"] = $linhas['scss'];

        $_SESSION["programacao"] = $linhas['programacao'];
        $_SESSION["desenvolvimento"] = $linhas['desenvolvimento'];
        $_SESSION["design"] = $linhas['design'];

        header('Location: ../perfil.php'); // Redirecionamento para o perfil...
    } else { // Se não ouver retorno de email e senha corespondentes no banco de dados...
        header("Location: ../login.php");
    }
} else { // Se email e senha não estiverem preenchidos...
    echo "Preencha campos email e senha";
    header("Location: ../login.php");
    die();
}
