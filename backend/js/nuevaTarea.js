$(document).submit(function (e) {
  e.preventDefault();
  if (($('#formTarea').attr('id')) == 'formTarea') {
    if ($("input[name=nombreTarea]").val().trim() == '') {
      $(document).ready(function () {
        $("#liveToast").toast('show');
        $("#liveToast").removeClass("bg-success").addClass('bg-danger');
        $('#msg').html("Debe ingresar un nombre").addClass("text-danger").removeClass("text-success");
      })
      return false;
    }
    $('#id').val($('#folder').text());
    $.ajax({
      type: "POST",
      url: "php/nuevaTarea.php",
      data: $('#formTarea').serialize(),
      success: function (data) {
        //MENSAJE
        $(document).ready(function () {
          $("#liveToast").toast('show');
          if (data) {
            $("#liveToast").removeClass("bg-danger").addClass('bg-success');
            $('#msg').html("Creada con exito!").addClass("text-success").removeClass("text-danger");
          } else {
            $("#liveToast").removeClass("bg-success").addClass('bg-danger');
            $('#msg').html("Debe ingresar un nombre").addClass("text-danger").removeClass("text-success");
          }
        })
        $("input[name=nombreTarea]").val("");
        $("#views-list").html("").append(data);
      }
    })
  }
})