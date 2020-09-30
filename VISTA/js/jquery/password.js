function validar(){

  var usuario, password;
  usuario = document.getElementById("user").value;
  password = document.getElementById("pass").value;
  letras = /[a-z]/;
  digitos = /[0-9]/;
  caracteres = /8,/;

if (usuario === "" && password === ""){
    $("#mensaje").text("Los campos no pueden estar vacíos.");
    return false;
  } else if (password === ""){
    $("#mensaje").text("El campo contraseña no puede estar vacío.");
    return false;
  } else if (usuario === ""){
    $("#mensaje").text("El campo usuario no puede estar vacío.");
    return false;
  }

  if (!(letras.test(password) || digitos.test(password) || (password==usuario))){
    $("#mensaje2").text("No cumple con los requerimientos establecidos.");
    return false;
  } else if (letras.test(password) && digitos.test(password) && (password!=usuario)) {
    return true;
  }

}
