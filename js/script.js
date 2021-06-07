$("form").submit(function (e) {
  e.preventDefault();
  $.ajax({
    type: "POST",
    url: "../php/ajax.php",
    data: $('form').serialize(),
    success: function (data) {
      if (data) {
        const obj = JSON.parse(data);
        if (obj.estado === 1) {
          $('#msg').html(obj.msg);
          $('#msg').show();
        } else if (obj.estado === 0) {
          window.location = obj.location;
        }
      } else {
        $('#msg').html();
        $('#msg').hide();
      }
    }
  })
})
