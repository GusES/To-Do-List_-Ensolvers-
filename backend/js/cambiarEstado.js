const changestatus = (e, i) => {
  const estado = e;
  const id = i;
  $.ajax({
    type: "POST",
    url: "php/cambiarEstado.php",
    data: { 'id': id, 'estado': estado },
    success: function (data) {
      retorno(data)
    }
  })
}
const retorno = (x) => {
  const i = x;
  $.ajax({
    type: "POST",
    url: "php/listarTareas.php",
    data: { 'id': i },
    success: function (data) {
      $("#views-list").html('').append(data);
    }
  })
}