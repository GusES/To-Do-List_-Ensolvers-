const accioncarpeta = (id, accion) => {
  if (accion === 1) {
    $.ajax({
      type: "POST",
      url: "php/listarTareas.php",
      data: { 'id': id, 'accion': accion },
      success: function (data) {
        $("#views-list").html("").append(data);
        $("#views-add").html("").load("inc/crearTarea.php");        
      }
    })
  } else if (accion === 2) {
    $.ajax({
      type: "POST",
      url: "php/EliminarCarpeta.php",
      data: { 'id': id, 'accion': accion },
      success: function (data) {
        //MENSAJE
        $(document).ready(function () {
          $("#liveToast").toast('show');
          if (data) {
            $("#liveToast").addClass('bg-success').removeClass("bg-danger");
            $('#msg').html("Eliminado Exitoso!").addClass("text-success").removeClass("text-danger");
          } else {
            $("#liveToast").addClass('bg-danger').removeClass("bg-success");
            $('#msg').html("Hubo un error").addClass("text-danger").removeClass("text-success");
          }
        })
        $("#views-list").load("php/listarCarpetas.php");
      }
    })
  }
}
