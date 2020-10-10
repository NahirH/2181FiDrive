<!-- Alta o modificación de un archivo. -->

<!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Editor de texto enriquecido -->
        <link rel="stylesheet" type="text/css" href="css/editor.css"> 
        <!-- Fontawesome -->
        <script defer src="fontawesome/js/all.js"></script> <!--load all styles -->
        <link src="fontawesome/css/fontawesome.min.css"></link>

        <!-- Scripts-->
        <script src="js/jquery/jquery-3.5.1.min.js"></script>
        <script src="js/jquery/funciones.js"></script>
        <script src="js/jquery/otras_funciones.js"></script>
        <script src="js/jquery/editor.js"></script>	

        <script type="text/javascript">

            $(document).ready(function(){
                $('#desc_archivo').Editor();
                $('#desc_archivo').Editor('setText', ['<p>Esta es una descripción genérica, si lo necesita, la puede cambiar.</p>']);
 
                $('#Submit').click(function(e){
				e.preventDefault();
				$('#desc_archivo').text($('#desc_archivo').Editor('getText'));
                $('#formularioamarchivo').submit();
                }            
            );

        });	
           
	    </script>

            <?php
                $tituloCabecera = "Añadir/Modificar Archivo";
                $textoPie = "Este es el pie.";
                $Titulo = "Añadir/Modificar Archivo"; 
                include_once("estructura/cabecera.php");
            ?>

    </head>
    <body>
    <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
            <div class="row">
                <div class="col-sm-3 d-md-block bg-light sidebar collapse" id="sidebarMenu">
                    <?php include_once("estructura/menu.php"); ?>
                </div>

                <div class="col-sm-9">
                    <div class="col-sm-9 mx-auto">
                    <form id="formularioamarchivo" name="formularioamarchivo" method="POST" enctype="multipart/form-data" action="action_am.php" class="needs-validation" novalidate>
                    <div class="custom-file">    
                        <label for="archivo">Seleccione un archivo:</label>
                            <input name="archivo" type="file" onchange="seleccionarIcono();" class="custom-file" id="archivo" required/> 
                            <div class="invalid-feedback">Por favor, ingrese un archivo.</div>
                            <div class="valid-feedback">Ok!</div>
                        </div>
                        </br>
                        </br>
                    <div>    
                        <label for="nombre">Nombre del archivo:</label>
                            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="1234.png" required/> 
                            <div class="invalid-feedback">Por favor, ingrese el nombre del archivo.</div>
                            <div class="valid-feedback">Ok!</div>
                        </div>
                        </br>

                        <div>    
                            <label for="desc">Descripción del archivo:</label>
                            <textarea name="desc_archivo" class="form-control" id="desc_archivo"required></textarea>
                            <div class="invalid-feedback">Por favor, ingrese la descripción del archivo.</div>
                            <div class="valid-feedback">Ok!</div>
                        </div>
                        </br>

                        <div>    
                        <label for="user">Seleccione usuario:</label>
                            <select name="user" class="custom-select" required>
                                <option selected disabled value="">Seleccione...</option>
                                <option value="adm" id="adm">Admin</option>
                                <option value="visit" id="visit">Visitante</option>
                                <option value="usted" id="usted">Usted</option>
                            </select>
                            
                            <div class="invalid-feedback">Por favor, seleccione al menos una opción.</div>
                            <div class="valid-feedback">Ok!</div>
                        </div>
                        </br>

                        <div class="tipo">
                            <label>Ícono a utilizar: </label>    
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="tipo" value="img" id="img" required>
                                <label class="custom-control-label" for="img"><i class="far fa-file-image"></i> Imagen</label>
                                
                                
                            </div>

                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="tipo" value="zip" id="zip" required>
                                <label class="custom-control-label" for="zip"><i class="far fa-file-archive"></i> Zip</label>
                                 
                            </div>

                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="tipo" value="doc" id="doc" required>
                                <label class="custom-control-label" for="doc"><i class="far fa-file-word"></i> Doc</label>
                                
                            </div>

                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="tipo" value="pdf" id="pdf" required>
                                <label class="custom-control-label" for="pdf"><i class="far fa-file-pdf"></i> PDF</label>
                                
                            </div>

                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="tipo" value="xls" id="xls" required>
                                <label class="custom-control-label" for="xls"><i class="far fa-file-excel"></i> XLS</label>
                                
                            </div>
                        </div>
                        </br>

                        <div>    
                        <label for="clave">Clave del archivo:</label>
                            <input name="clave" type="hidden" class="form-control" id="clave" required/> 
                            <div class="invalid-feedback">Por favor, ingrese la contraseña.</div>
                            <div class="valid-feedback">Ok!</div>
                        </div>
                        </br>
                            <input type="submit" name="Submit" id = "Submit" value="Subir archivo" class="btn btn-outline-info btn-lg btn-block"/>
                        </form>


                    </div>
                </div>
            </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script defer src="fontawesome/js/all.js"></script>
    <script src="js/jquery/funciones.js"></script>
    <script src="js/jquery/otras_funciones.js"></script>
    <script type="text/javascript" src="js/jquery/editor.js"></script>
    </body>
    <footer>
    <?php include_once("estructura/pie.php"); ?>
    </footer>
</html>