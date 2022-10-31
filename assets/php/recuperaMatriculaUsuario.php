<?php
session_start();
if (!isset($_SESSION['nome']) && !isset($_SESSION['email'])) {
    header("Location: index.php");
    die();
}

//CONEXÃO COM O BANCO
require_once('conexaoDb.php');
$banco = new db();
$conexao = $banco->conexaoDb();

$sqlSelect = "SELECT * FROM formulario_cliente";

if ($registro = mysqli_query($conexao, $sqlSelect)) {

    while ($resultado = mysqli_fetch_array($registro)) {

        echo '
        
            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <div class="containerResultadosCliente">
                    <h6>Escolaridade: ' . $resultado['tipo_educacao'] . '</h6>
                    <h6>Aluno: ' . $resultado['nome_aluno'] . '</h6>
                    <h6>Status: ' . $resultado['status_matricula'] . '</h6>
                </div>
                <!--Fim containerResultadosClientes-->
            </div>
            <!--Fim col-->
        
        ';
    }
} else {

    echo 'erroQuery';
}
