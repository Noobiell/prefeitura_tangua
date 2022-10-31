//Funções que serão iniciadas junto com o carregamento do arquivo
mascaraInput();
submitForm();

function mascaraInput() {
    $("#cpf").mask('000.000.000-00');
}

function submitForm() {

    const formCadastro = document.querySelector("#cadastroCliente");

    formCadastro.addEventListener("submit", e => {

        e.preventDefault();

        if (recuperaForm(formCadastro)) {

            salvaFormDb(recuperaForm(formCadastro));

        }

    });

}

function recuperaForm(form) {

    let user = {};
    let validForm = true;
    const avisoForm = document.querySelector(".avisoForm");

    [...form.elements].forEach(element => {

        element.classList.remove('invalidForm');

        if (element.value != '' && element.type != 'submit') {

            if (element.name == 'cpf') {

                user[element.name] = element.value.replace('.', '').replace('.', '').replace('-', '');

            } else {

                user[element.name] = element.value;

            }

        } else {

            if (element.type != 'submit') {

                validForm = false;

                element.classList.add('invalidForm');
                avisoForm.innerHTML = 'Preencha todas as informações!';
                avisoForm.style.display = 'block'

            }

        }

    });

    if (!validForm) {

        return false;

    }

    return user;
}

function salvaFormDb(user) {

    $.ajax({

        url: 'assets/php/cadastraCliente.php',
        method: 'POST',
        data: user,
        success: data => {

            if (data == 'sucesso') {

                Swal.fire({
                    title: "Sucesso",
                    text: "Seu cadastro foi realizado com sucesso",
                    icon: "success",
                    button: "Fechar",
                }).then(result => {

                    if (result) {
                        window.location.href = 'index.php?cpf=' + user.cpf;
                    }

                });

            } else if (data == 'jaExiste') {

                Swal.fire({
                    title: "CPF Cadastrado",
                    text: "Este CPF ja existe em nosso sistema",
                    icon: "info",
                    button: "Fechar",
                }).then(result => {

                    if (result) {
                        $("#cpf").addClass('invalidForm')
                    }

                });

            } else if (data == 'erroQuery') {

                Swal.fire({
                    title: "Erro interno",
                    text: "Entre em contato com o administrador",
                    icon: "warning",
                    button: "Fechar",
                });

            }

        }
    });

}