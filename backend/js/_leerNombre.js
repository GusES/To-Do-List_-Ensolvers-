let leerNombre = (id) => {
  $.ajax({
    type: "POST",
    url: "php/leerNombre.php",
    data: { 'id': id },
    success: function (data) {
      $('#modal').html(data);
    }
  })
}