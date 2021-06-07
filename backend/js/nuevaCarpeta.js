$(document).submit(function (e) {
  e.preventDefault();
  if (($('#formCarpeta').attr('id')) == 'formCarpeta') {
    $.ajax({
      type: "POST",
      url: "php/nuevaCarpeta.php",
      data: $('#formCarpeta').serialize(),
      success: function (data) {
        //MENSAJE
        $(document).ready(function () {
          $("#liveToast").toast('show');
          if (data) {
            $("#liveToast").addClass('bg-success').removeClass("bg-danger");
            $('#msg').html("Creacion Exitosa!").addClass("text-success").removeClass("text-danger");
          } else {
            $("#liveToast").addClass('bg-danger').removeClass("bg-success");
            $('#msg').html("Incluya un Nombre").addClass("text-danger").removeClass("text-success");
          }
        })
        $("input[name=nombreCarpeta]").val("");
        $("#views-list").load("php/listarCarpetas.php");
      }
    })
  }
})
