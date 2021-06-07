let editarNombre = (p1) => {
  let id = parseInt(p1);
  $.ajax({
    type: "POST",
    url: "php/editarNombre.php",
    data: $('#formEditar').serialize(),
    success: function (data) {
      //MENSAJE
      $(document).ready(function () {
        $("#liveToast").toast('show');
        if (data) {
          $("#liveToast").addClass('bg-success').removeClass("bg-danger");
          $('#msg').html("Realizado con exito!").addClass("text-success").removeClass("text-danger");
        } else {
          $("#liveToast").addClass('bg-danger').removeClass("bg-success");
          $('#msg').html("Hubo un error").addClass("text-danger").removeClass("text-success");
        }
      })
      $.ajax({
        type: "POST",
        url: "php/listarTareas.php",
        data: { 'id': id },
        success: function (data) {
          $('#views-list').html(data);
        }
      })
    }
  })
}
