function eliminarTrabajador(id, nombre) {
    const nombreTrabajador = nombre;

    Swal.fire({
        title: '¿Desea eliminar a este trabajador?',
        text: "Este trabajador se eliminará definitivamente",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#178ABC',
        cancelButtonColor: '#B91308',
        confirmButtonText: 'Sí',
        cancelButtonText: 'No',
    }).then((cliente) => {
        if (cliente.isConfirmed) {
            window.location = '/trabajadores/delete/' + id;
        }
        else {
            window.location = '/trabajadores';
        }
    });
}

/** -------- Sin aplicar el sweetalert en la plantilla Twig --------- */
/*function eliminarTrabajador(id) {
    var opcion = confirm("¿Desea eliminar a este trabajador?");

    if (opcion == true) {
        window.location = '/trabajadores/delete/' + id;
        console.log(nombre+' eliminado correctamente');
    }
    else {
        window.location = '/trabajadores';
        console.log('Trabajador '+nombre+' no eliminado');
    }
}*/