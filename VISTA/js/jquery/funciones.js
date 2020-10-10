function validarDivision(){
    var valor = document.getElementById("num2").value;
    var operacion = document.getElementById("ope").value;
    var esValido = false;
    if ((valor==0) && (operacion==='division')){
        esValido = false;      
        alert("No existe la división por cero. Intente con otro número.") ; 
    } else {
        esValido = true;
    }
return esValido;
};

(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Get the forms we want to add validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();

  