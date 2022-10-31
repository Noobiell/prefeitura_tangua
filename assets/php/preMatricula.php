<?php
date_default_timezone_set('America/Sao_Paulo');
session_start();
if (!isset($_SESSION['nome']) && !isset($_SESSION['email'])) {
    header("Location: index.php");
    die();
}

//CONEXÃO COM O BANCO
require_once('conexaoDb.php');
$banco = new db();
$conexao = $banco->conexaoDb();

$nome = $_POST['nome'];
$dataNascimento = $_POST['dtNasci'];
$tipoEducacao = $_POST['tipoEducacao'];
$grauEducacao = $_POST['grauEducacao'];
$endereco = $_POST['endereco'];
$referencia = $_POST['referencia'];
$telefone = $_POST['telefone'];
$segundaUnidade = $_POST['segundaUnidade'];
$ne = $_POST['ne'];
$av = $_POST['av'];
$bolsaFamilia = $_POST['bolsaFamilia'];
$escolaOrigem = $_POST['escolaOrigem'];
$observacao = $_POST['observacao'];

$sqlInsert = "INSERT INTO formulario_cliente(nome_aluno, data_nascimento, tipo_educacao, endereco, referencia, telefone, segunda_unidade_escola, NE, AV, bolsa_familia, escola_origem, observacao, data_cadastro, grau_educacao) VALUES('$nome', '$dataNascimento', '$tipoEducacao', '$endereco', '$referencia', '$telefone', '$segundaUnidade', '$ne', '$av', '$bolsaFamilia', '$escolaOrigem', '$observacao', NOW(), '$grauEducacao')";

if (mysqli_query($conexao, $sqlInsert)) {

    echo 'sucesso';
} else {

    echo 'erroQuery';
}
