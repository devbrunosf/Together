<?php
// Areas...
$front=$_POST['front'];
$back=$_POST['back'];
$full=$_POST['full'];
// Linguagens...
$html=$_POST['html'];
$css=$_POST['css'];
$php=$_POST['php'];
$javascript=$_POST['javascript'];
// Fremeworks...
$boot=$_POST['boot'];
$node=$_POST['node'];
$vanilla=$_POST['vanilla'];
$scss=$_POST['scss'];<?php
// Areas...
$front=$_POST['front'];
$back=$_POST['back'];
$full=$_POST['full'];
// Linguagens...
$html=$_POST['html'];
$css=$_POST['css'];
$php=$_POST['php'];
$javascript=$_POST['javascript'];
// Fremeworks...
$boot=$_POST['boot'];
$node=$_POST['node'];
$vanilla=$_POST['vanilla'];
$scss=$_POST['scss'];
// Habilidades...
$programacao=$_POST['programacao'];
$desenvolvimento=$_POST['desenvolvimento'];
$design=$_POST['design'];

include "conecta.php";

$codigo = "select * from usuario order by cod_usu desc"; // Pega o código do último usuário adicionado...
$result = mysqli_query($conexao, $codigo);
$linha = mysqli_fetch_assoc($result);
$ultimo = $linha['cod_usu']; // Pega o código do último usuário adicionado...

$sqla = "insert into areas (front,back,full,cod_usu) values ('$front','$back','$full','$ultimo')";
$sqll = "insert into linguagens (html,css,php,javascript,cod_usu) values ('$html','$css','$php','$javascript','$ultimo')";
$sqlf = "insert into frameworks (boot,node,vanilla,scss,cod_usu) values ('$boot','$node','$vanilla','$scss','$ultimo')";
$sqlh = "insert into habilidades (programacao,desenvolvimento,design,cod_usu) values ('$programacao','$desenvolvimento','$design','$ultimo')";

$resul = mysqli_query($conexao,$sqla);
$result = mysqli_query($conexao,$sqll);
$resultado = mysqli_query($conexao,$sqlf);
$resultadoh = mysqli_query($conexao,$sqlh);

if($resultado)
{
   header('Location: ../perfil.php');
   die();
}