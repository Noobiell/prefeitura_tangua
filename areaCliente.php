<?php
session_start();
if (!isset($_SESSION['nome']) && !isset($_SESSION['email'])) {
    header("Location: index.php");
}

?>

<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/css/custom.css" rel="stylesheet">
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--FONTAWESOME-->
    <script src="https://kit.fontawesome.com/59f636855b.js" crossorigin="anonymous"></script>

    <!-- SWEET-ALERT -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" href="assets/img/favIcon.jpg">
    <title>Área do Cliente</title>
</head>

<body>

    <?php include('headerCliente.php') ?>

    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <h1 class="tituloPag">Formularios disponíveis!</h1>
                <a href="formularioPreM.php" class="btnRosa">Formulário de pré-matrícula</a>
            </div>
            <!--Fim col-->
        </div>
        <!--fim row-->

        <div class="row">
            <div class="col-12">
                <h1 class="tituloPag">Acompanhe abaixo seus resultados:</h1>
            </div>
        </div>

        <div class="row" id="registros">

            <div class="col-12 col-md-4 col-lg-3 mb-4">
                <div class="containerResultadosCliente">
                    <h6>Tipo: Pré Matrícula</h6>
                    <h6>Aluno: Gabriel Lima</h6>
                    <h6>Status: Em análise</h6>
                </div>
                <!--Fim containerResultadosClientes-->
            </div>
            <!--Fim col-->

            <div class="col-12 col-md-4 col-lg-3">
                <div class="containerResultadosCliente">
                    <h6>Tipo: Pré Matrícula</h6>
                    <h6>Aluno: Gabriel Lima</h6>
                    <h6>Status: Em análise</h6>
                </div>
                <!--Fim containerResultadosClientes-->
            </div>
            <!--Fim col-->
        </div>
        <!--Fim row-->

    </div>
    <!--Fim container-->


    <!-- Optional JavaScript; choose one of the two! -->
    <script src="assets/js/areaCliente.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>