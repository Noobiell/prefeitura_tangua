submitForm();

function submitForm() {

    const preMatricula = document.querySelector("#preMatricula");

    preMatricula.addEventListener('submit', e => {

        e.preventDefault();

        if (recuperaFormulario(preMatricula)) {

            enviaFormularioDb(recuperaFormulario(preMatricula));

        }


    });

}

function recuperaFormulario(form) {

    let matricula = {};
    let isValid = true;

    [...form.elements].forEach(element => {

        if (!element.value == '') {

            if (element.name == 'ne' || element.name == 'av' || element.name == 'bolsaFamilia') {

                if (element.checked) {

                    matricula[element.name] = element.value;

                }

            } else {

                matricula[element.name] = element.value;

            }

        } else {

            if (element.type != 'submit') {

                Swal.fire({
                    title: "Preencha todos os campos",
                    text: "Você precisa preencher todos os campos para finalizar o enivo da pré-matrícula",
                    icon: "warning",
                    button: "Fechar",
                });

                isValid = false;
                element.classList.add('invalidForm');

            }

        }

    });

    if (!isValid) {
        return false;
    }

    return matricula;

}


function enviaFormularioDb(preMatricula) {

    $.ajax({

        url: 'assets/php/preMatricula.php',
        method: 'POST',
        data: preMatricula,
        success: data => {

            if (data == 'sucesso') {

                Swal.fire({
                    title: "Sucesso",
                    text: "Formulário salvo com sucesso",
                    icon: "success",
                    button: "Fechar",
                }).then(result => {
                    if (result) {
                        window.location.href = 'areaCliente.php';
                    }
                });

            } else if (data == 'erroQuery') {

                Swal.fire({
                    title: "Erro interno",
                    text: "Entre em contato com o Administrador",
                    icon: "warning",
                    button: "Fechar",
                });

            }

        }

    });

}