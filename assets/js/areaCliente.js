recuperaRegistros();

function recuperaRegistros() {

    const registros = document.querySelector("#registros");

    $.ajax({

        url: 'assets/php/recuperaMatriculaUsuario.php',
        success: data => {

            registros.innerHTML = data;

        }

    });

}