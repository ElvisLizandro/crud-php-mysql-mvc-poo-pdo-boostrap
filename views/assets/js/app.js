const crear_usuario = document.querySelector('#crear_usuario');
const editar_usuario = document.querySelector('#editar_usuario');
const btn_eliminar = document.querySelectorAll('#btn_eliminar');
const btn_editar = document.querySelectorAll('#btn_editar');

$(document).ready(function () {
    new DataTable('#tabla-usuarios');
});

crear_usuario.addEventListener('click', function(e){
    e.preventDefault();
    // Obtener los datos del formulario
    const formData = new FormData(document.getElementById('myForm'));

    fetch('./create', {
        method: 'POST',
        body: formData
    }).then(response => {
        if(response.ok){
            return response.text();
        }
        throw new Error('Error en la solicitud.');
    }).then(data => {
        const respuesta = JSON.parse(data); // Si la respuesta es JSON, convertirla en un objeto javascript
        if(respuesta.respuesta == "ok") { // Acceder a un valor especifico de la respuesta
            $('#modalRegistroUsuario').modal('hide');
            alerts({
                position: "top-end",
                icon: 'success',
                title: 'Exito',
                text: 'Usuario Creado Correctamente',
                showConfirmButton: false,
                timer: 2000
            });
        }else{
            alerts({
                position: "top-end",
                icon: 'error',
                title: 'Error',
                text: 'Ocurrio un Error al crear el Usuario',
                showConfirmButton: false,
                timer: 2000
            })
        }
    }).catch(error => {
        console.error('Error:', error);
    });
})

// corregir alertas
const alerts = (alertData) => {
}