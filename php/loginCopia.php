<?php
session_start();

$email = $_POST["email"];
$senha = $_POST["senha"];

if(empty($email)){

   echo "Email Vazio ";
   echo " / ";

}

if(empty($senha)){

   echo "Senha Vazia ";

}

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

      $sql_area = "select * from areas where cod_usu='$cod_usu'";
      $result_area = mysqli_query($conexao, $sql_area);
      $linha_area = mysqli_fetch_assoc($result_area);

      $sql_ling = "select * from linguagens where cod_usu='$cod_usu'";
      $result_ling = mysqli_query($conexao, $sql_ling);
      $linha_ling = mysqli_fetch_assoc($result_ling);

      $sql_fram = "select * from frameworks where cod_usu='$cod_usu'";
      $result_fram = mysqli_query($conexao, $sql_fram);
      $linha_fram = mysqli_fetch_assoc($result_fram);

      $sql_habil = "select * from habilidades where cod_usu='$cod_usu'";
      $result_habil = mysqli_query($conexao, $sql_habil);
      $linha_habil = mysqli_fetch_assoc($result_habil);

      if ($cod_usu == $linha["cod_usu"]) {
         $_SESSION["front"] = $linha_area['front'];
         $_SESSION["back"] = $linha_area['back'];
         $_SESSION["full"] = $linha_area['full'];

         $_SESSION["html"] = $linha_ling['html'];
         $_SESSION["css"] = $linha_ling['css'];
         $_SESSION["php"] = $linha_ling['php'];
         $_SESSION["javascript"] = $linha_ling['javascript'];

         $_SESSION["boot"] = $linha_fram['boot'];
         $_SESSION["node"] = $linha_fram['node'];
         $_SESSION["vanilla"] = $linha_fr<?php
session_start();

$email = $_POST["email"];
$senha = $_POST["senha"];

if(empty($email)){

   echo "Email Vazio ";
   echo " / ";

}

if(empty($senha)){

   echo "Senha Vazia ";

}

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

      $sql_area = "select * from areas where cod_usu='$cod_usu'";
      $result_area = mysqli_query($conexao, $sql_area);
      $linha_area = mysqli_fetch_assoc($result_area);

      $sql_ling = "select * from linguagens where cod_usu='$cod_usu'";
      $result_ling = mysqli_query($conexao, $sql_ling);
      $linha_ling = mysqli_fetch_assoc($result_ling);

      $sql_fram = "select * from frameworks where cod_usu='$cod_usu'";
      $result_fram = mysqli_query($conexao, $sql_fram);
      $linha_fram = mysqli_fetch_assoc($result_fram);

      $sql_habil = "select * from habilidades where cod_usu='$cod_usu'";
      $result_habil = mysqli_query($conexao, $sql_habil);
      $linha_habil = mysqli_fetch_assoc($result_habil);

      if ($cod_usu == $linha["cod_usu"]) {
         $_SESSION["front"] = $linha_area['front'];
         $_SESSION["back"] = $linha_area['back'];
         $_SESSION["full"] = $linha_area['full'];

         $_SESSION["html"] = $linha_ling['html'];
         $_SESSION["css"] = $linha_ling['css'];
         $_SESSION["php"] = $linha_ling['php'];
         $_SESSION["javascript"] = $linha_ling['javascript'];

         $_SESSION["boot"] = $linha_fram['boot'];
         $_SESSION["node"] = $linha_fram['node'];
         $_SESSION["vanilla"] = $linha_fram['vanilla'];
         $_SESSION["scss"] = $linha_fram['scss'];

         $_SESSION["programacao"] = $linha_habil['programacao'];
         $_SESSION["desenvolvimento"] = $linha_habil['desenvolvimento'];
         $_SESSION["design"] = $linha_habil['design'];
      }

      header('Location: ../perfil.php');
   } else {
      header("Location: ../login.php");
   }
} else {
   $_SESSION["msg"] = "Preencha campos email e senha";
   //header('Location: ../index.php');
   die();
}