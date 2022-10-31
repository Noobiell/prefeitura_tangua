mascaras();
submitForm();

function mascaras() {
    $("#cpf").mask('000.000.000-00');
}

function submitForm() {

    const loginCliente = document.querySelector("#loginCliente");

    loginCliente.addEventListener('submit', e => {

        e.preventDefault();

        if (recuperaForm(loginCliente)) {

            realizaLogin(recuperaForm(loginCliente));

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

function realizaLogin(user) {

    $.ajax({

        url: 'assets/php/loginCliente.php',
        method: 'POST',
        data: user,
        success: data => {

            if (data == 'sucesso') {

                //REDIRECIONAR PARA A TELA DO CLIENTE
                window.location.href = 'areaCliente.php';

            } else if (data == 'naoExiste') {

                Swal.fire({
                    title: "Usuario inválido",
                    text: "CPF ou senha não encontrados em nosso sistema",
                    icon: "warning",
                    button: "Fechar",
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