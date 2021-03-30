$(document).ready(function () {
  // Incializar datatables serverSide
  $('#postsTable').dataTable({
    processing: true,
    serverSide: true,
    ajax: {
      url: 'ajax/PostTable.php',
    },
    language: {
      url: '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json',
    },
  })

  // Pruebas con los botones
  $(document).on('click', '.deleteBtn', function () {
    let id = $(this).data('id')
    Swal.fire({
      title: '¿Realmente quieres borrar este post?',
      showDenyButton: true,
      confirmButtonText: `Sí, borralo`,
      denyButtonText: `Cancelar`,
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire('¡Hecho!', 'El post ha sido eliminado correctamente', 'success')
      } else if (result.isDenied) {
        Swal.fire('El post esta a salvo, no se ha eliminado nada', '', 'info')
      }
    })
  })
})
