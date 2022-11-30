<?php
#Caminho absoluto
$dirInt="";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$dirInt}");
$bar=(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?"":"/";
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");

#Banco de dados 
$dbHost = 'Localhost:3306';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'cadastro';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno)
{
	echo "Erro";
}
else
{
	echo "Conexão efetuada com sucesso";
}

?>  