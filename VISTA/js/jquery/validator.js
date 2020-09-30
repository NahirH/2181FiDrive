$(function(){

    $('#loginForm').bootstrapValidator({

        message: 'Este valor no es valido',
   
        feedbackIcons: {
   
            valid: 'glyphicon glyphicon-ok',
   
            invalid: 'glyphicon glyphicon-remove',
   
            validating: 'glyphicon glyphicon-refresh'
   
        },
   
        fields: {
   
            user: {
   
                validators: {
   
                    notEmpty: {
   
                        message: 'El nombre de usuario es requerido'
   
                    }
   
                }
   
            },
   
            pass: {
   
                validators: {
   
                    notEmpty: {
   
                        message: 'La contraseña es requerida'
   
                    },

                    regexp: {
                        minlength: 8,
                        regexp: /^[a-zA-Z]+$/,
                        regexp: /^[0-9]+$/,
   
                    }
   
                }
   
            }
   
        }
   
   })})