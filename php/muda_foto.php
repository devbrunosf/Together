<?php
session_start();

session_destroy();
unset($_SESSION);

header('Location: ../index.php');
die();<?php
session_start();
include "config_upload.php";  // arquivo que contém as variáveis de configuração

$nome_arquivo = $_FILES['arquivo']['name'];
$tamanho_arquivo = $_FILES['arquivo']['size'];
$arquivo_temporario = $_FILES['arquivo']['tmp_name'];

$ext = strrchr($nome_arquivo, '.');
$cod = $_SESSION["cod_usu"];
$img = $_SESSION["cod_usu"] . $ext;

if (!empty($nome_arquivo)) {
	if ($sobrescrever == "não" && file_exists("$caminho/$nome_arquivo"))
		die("Arquivo já existe");

	if ($limitar_tamanho == "sim" && ($tamanho_arquivo > $tamanho_bytes))
		die("Arquivo deve ter o no máximo $tamanho_bytes bytes");

	$ext = strrchr($nome_arquivo, '.');
	if (($limitar_ext == "sim") && !in_array($ext, $extensoes_validas))
		die("Extensão de arquivo inválida para upload");

	if (move_uploaded_file($arquivo_temporario, "../imagens/$img")) {
		echo " Upload do arquivo: " . $nome_arquivo . " foi concluído com sucesso ";

		include "conecta.php";

		$sql = "select * from imagens where cod_usu='$cod'";
		$result = mysqli_query($conexao, $sql);

		if (mysqli_num_rows($result) == 1) {
			$sqlu = "update imagens set imagem='$img' where cod_usu = '$cod'";
			$resultado = mysqli_query($conexao, $sqlu);
		} else {
			$sqli = "insert into imagens (imagem,cod_usu) values ('$img','$cod')";
			$resulta = mysqli_query($conexao, $sqli);
		}

		header('Location: ../perfil.php');
		die();
	} else {
		echo "Arquivo não pode ser copiado para o servidor.";
	}
} else {
	die("Selecione o arquivo a ser enviado");
}
