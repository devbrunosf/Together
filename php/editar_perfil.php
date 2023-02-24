<?php
session_start();

include "conecta.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$front = $_POST["front"];
$back = $_POST["back"];
$full = $_POST["full"];

$html = $_POST["html"];
$css = $_POST["css"];
$php = $_POST["php"];
$javascript = $_POST["javascript"];

$boot = $_POST["boot"];
$node = $_POST["node"];
$vanilla = $_POST["vanilla"];
$scss = $_POST["scss"];

$programacao = $_POST["programacao"];
$desenvolvimento = $_POST["desenvolvimento"];
$design = $_POST["design"];

$cod_usu = $_SESSIO<?php
session_start();

include "conecta.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$front = $_POST["front"];
$back = $_POST["back"];
$full = $_POST["full"];

$html = $_POST["html"];
$css = $_POST["css"];
$php = $_POST["php"];
$javascript = $_POST["javascript"];

$boot = $_POST["boot"];
$node = $_POST["node"];
$vanilla = $_POST["vanilla"];
$scss = $_POST["scss"];

$programacao = $_POST["programacao"];
$desenvolvimento = $_POST["desenvolvimento"];
$design = $_POST["design"];

$cod_usu = $_SESSION["cod_usu"];

$SQLA = "update areas set front='$front', back='$back', full='$full' where cod_usu = '$cod_usu'";
$SQLL = "update linguagens set html='$html', css='$css', php='$php', javascript='$javascript' where cod_usu = '$cod_usu'";
$SQLF = "update frameworks set boot='$boot', node='$node', vanilla='$vanilla', scss='$scss' where cod_usu = '$cod_usu'";
$SQLH = "update habilidades set programacao='$programacao', desenvolvimento='$desenvolvimento', design='$design' where cod_usu = '$cod_usu'";

$resultado = mysqli_query($conexao, $SQLA);
$resultado = mysqli_query($conexao, $SQLL);
$resultado = mysqli_query($conexao, $SQLF);
$resultado = mysqli_query($conexao, $SQLH);

if ($resultado) {

   $sql = "select * from usuario where cod_usu = '$cod_usu'";
   $resultado = mysqli_query($conexao, $sql);

   if (mysqli_num_rows($resultado) == 1) {

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
   }
   header('Location: ../perfil.php');
   die();
}