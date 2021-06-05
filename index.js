$(document).ready(function () {
  var formUsuario = document.querySelector("#formUsuario");
  $(formUsuario).on("submit", function (e) {
    e.preventDefault();
    //Validar que los campos no estén vacíos
    var strNombre = $("input#txtNombre").val().trim();
    var strApellido = $("input#txtApellido").val().trim();
    if (strNombre == "" || strApellido == "") {
      Swal.fire("Atención", "Todos los campos son obligatorios", "error");
    } else {
      //Envío de datos hacia el archivo php
      var request = window.XMLHttpRequest
        ? new XMLHttpRequest()
        : new ActiveXObject("Microsoft.XMLHTTP");
      var ajaxUrl = "http://localhost/PruebaMilleniumDesarrollo/consulta.php";
      var formData = new FormData(formUsuario);
      request.open("POST", ajaxUrl, true);
      request.send(formData);
      request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
          var objData = request.responseText;
          //Mensaje en caso de que se halla guardado con éxito
          if (objData == "guardado") {
            Swal.fire(
              "Enhorabuena",
              "Datos guardados satisfactoriamente",
              "success"
            );
            //Si hay un problema con la conexión da una alerta de error y se puede mirar dicho error a través de objData en consola
          } else if (objData.includes("Connection error")) {
            Swal.fire(
              "Error",
              "Hay un error del lado del servidor, pronto se solucionará, perdone el inconveniente",
              "error"
            );
            console.log(objData);
            //Si no se guardaron los datos da una alerta de error y se puede mirar dicho error a través de objData en consola
          } else if (objData.includes("No se pudo guardar los datos")) {
            Swal.fire("Error", "No se pudo guardar los datos", "error");
            console.log(objData);
          } else {
            Swal.fire("Error", "Ocurrió un error inesperado", "error");
            console.log(objData);
          }
          $("input#txtNombre").val("");
          $("input#txtApellido").val("");
        }
      };
    }
  });
});
