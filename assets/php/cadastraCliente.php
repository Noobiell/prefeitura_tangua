<?php
//CONEXÃO COM O BANCO
require_once('conexaoDb.php');
$banco = new db();
$conexao = $banco->conexaoDb();

//VARIAVEIS RECEBIDAS NA REQUISIÇÃO
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$senha = md5($_POST['senha']);

//QUERY QUE SERÃO EXECUTADAS NO BANCO
$sqlInsert = "INSERT INTO clientes(nome, email, cpf, senha) VALUES('$nome', '$email', '$cpf', '$senha')";
$selectCliente = "SELECT * FROM clientes WHERE cpf = '$cpf'";

//VERIFICA SE O CPF ENVIADO JA EXISTE NO BANCO
if ($resultadoCliente = mysqli_query($conexao, $selectCliente)) {

    //CRIA UM ARRAY COM O RESULTADO DA PESQUISA DO CPF
    $registroCliente = mysqli_fetch_array($resultadoCliente);

    //CADASTRA O USUARIO NO BANCO CASO NÃO EXISTA O REGISTRO DO MESMO
    if (!isset($registroCliente['cpf'])) {

        //EXECUTA O REGISTRO
        if (mysqli_query($conexao, $sqlInsert)) {

            echo 'sucesso';
        } else {

            echo 'erroQuery';
        }
    } else {

        echo 'jaExiste';
    }
} else {

    echo 'erroQuery';
}
