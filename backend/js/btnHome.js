const btnHome = () => {
  $("#views-list").html("").load("php/listarCarpetas.php");
  $("#views-add").html("").load("inc/crearCarpeta.php");
}