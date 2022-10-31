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

        <div class="row">

            <div class="col-12">
                <div class="containerFormLogin">
                    <form id="preMatricula">
                        <div class="text-center">
                            <h1 class="tituloPag text-center">Formulário Pré Matrícula 2023</h1>
                        </div>

                        <div class="mb-4">
                            <label for="nome" class="form-label">Nome Completo do aluno</label>
                            <input type="text" class="inputFormulario" name="nome" id="nome" placeholder="Digite aqui" maxlength="100">
                        </div>

                        <div class="mb-4">
                            <label for="dtNasci" class="form-label">Data de Nascimento</label>
                            <input type="date" class="inputFormulario" name="dtNasci" id="dtNasci" placeholder="Digite aqui">
                        </div>

                        <div class="mb-4">
                            <label for="tipoEducacao" class="form-label">Período escolar</label>
                            <select name="tipoEducacao" id="tipoEducacao" class="selectFormulario">
                                <option selected disabled>Selecione uma opoção</option>
                                <option value="creche">Creche</option>
                                <option value="Pré Escola">Pré Escola</option>
                                <option value="Fundamental">Fundamental</option>
                                <option value="Jovens e Adultos">Jovens e Adultos</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="grauEducacao" class="form-label">Grau de educação</label>
                            <select name="grauEducacao" id="grauEducacao" class="selectFormulario">
                                <option selected disabled>Selecione uma opoção</option>
                                <!--SERÁ POPULADO PELO JAVASCRIPT-->
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="endereco" class="form-label">Endereço <span class="explicacaoForm">(Rua, numero da casa e bairro)</span></label>
                            <input type="text" class="inputFormulario" name="endereco" id="endereco" placeholder="Digite aqui">
                        </div>

                        <div class="mb-4">
                            <label for="referencia" class="form-label">Referencia</label>
                            <input type="text" class="inputFormulario" name="referencia" id="referencia" placeholder="Digite aqui">
                        </div>

                        <div class="mb-4">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="inputFormulario" name="telefone" id="telefone" placeholder="Digite aqui">
                        </div>

                        <div class="mb-4">
                            <label for="segundaUnidade" class="form-label">2º Opção de Unidade para matrícula</label>
                            <input type="text" class="inputFormulario" name="segundaUnidade" id="segundaUnidade" placeholder="Digite aqui">
                        </div>

                        <div class="mb-4">
                            <label for="ne" class="form-label">Possui alguma necessidade especial com laudo?</label><br>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ne" id="neSim" value="Sim">
                                <label class="form-check-label" for="neSim">Sim</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ne" id="neNao" value="Não">
                                <label class="form-check-label" for="neNao">Não</label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="ne" class="form-label">Possui Alta Vulnerabilidade com comprovação?</label><br>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="av" id="avSim" value="Sim">
                                <label class="form-check-label" for="avSim">Sim</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="av" id="avNao" value="Não">
                                <label class="form-check-label" for="avNao">Não</label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="ne" class="form-label">Beneficiário do Programa Federal Bolsa Família?</label><br>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bolsaFamilia" id="bsSim" value="Sim">
                                <label class="form-check-label" for="bsSim">Sim</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="bolsaFamilia" id="bsNao" value="Não">
                                <label class="form-check-label" for="bsNao">Não</label>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="escolaOrigem" class="form-label">Escola de Origem?</label>
                            <input type="text" class="inputFormulario" name="escolaOrigem" id="escolaOrigem" placeholder="Digite aqui">
                        </div>

                        <div class="mb-4">
                            <label for="observacao" class="form-label">Observações</label>
                            <textarea name="observacao" id="observacao" class="inputFormulario" rows="5"></textarea>
                        </div>

                        <div class="mb-4">
                            <button class="btnRosa w-100" type="submit">Enviar <i class="fa-solid fa-check"></i></button>
                        </div>
                    </form>

                </div>
                <!--Fim containerFormLogin-->
            </div>
            <!--Fim col-->

        </div>
        <!--Fim row-->

    </div>
    <!--Fim container-->


    <!-- Optional JavaScript; choose one of the two! -->
    <script src="assets/js/formularioPreM.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>