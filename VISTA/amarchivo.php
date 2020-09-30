<!-- Alta o modificación de un archivo. -->

<!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Scripts-->
        <script src="js/jquery/jquery-3.5.1.min.js"></script>
        <script src="js/jquery/funciones.js"></script>

            <?php
                $tituloCabecera = "Añadir/Modificar Archivo";
                $textoPie = "Este es el pie.";
                $Titulo = "Añadir/Modificar Archivo"; 
                include_once("estructura/cabecera.php");
            ?>

    </head>
    <body>
    <div class="container" style="margin-top: 20px; margin-bottom: 20px";>
            <div class="row">
                <div class="col-sm-3 d-md-block bg-light sidebar collapse" id="sidebarMenu">
                    <?php include_once("estructura/menu.php"); ?>
                </div>

                <div class="col-sm-9">
                    <div class="col-sm-6 mx-auto">
                    <form id="formularionumero" name="formularionumero" method="GET" action="#" class="needs-validation" novalidate>
                        <div>    
                        <label for="nombre">Nombre del archivo:</label>
                            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="1234.png" required/> 
                            <div class="invalid-feedback">Por favor, ingrese el nombre del archivo.</div>
                            <div class="valid-feedback">Ok!</div>
                        </div>
                        </br>

                        <div>    
                            <label for="desc">Descripción del archivo:</label>
                            <textarea name="desc" type="text" class="form-control" id="desc" required/></textarea>
                            <div class="invalid-feedback">Por favor, ingrese la descripción del archivo.</div>
                            <div class="valid-feedback">Ok!</div>
                        </div>
                        </br>

                        <div>    
                        <label for="user">Seleccione usuario:</label>
                            <select name="user" class="form-control" required>
                                <option id="selecc" selected disabled>Seleccione</option>
                                <option id="adm">Admin</option>
                                <option id="visit">Visitante</option>
                                <option id="usted">Usted</option>
                            </select>
                            
                            <div class="invalid-feedback">Por favor, seleccione al menos una opción.</div>
                            <div class="valid-feedback">Ok!</div>
                        </div>
                        </br>

                        <div class="tipo">
                            <label>Ícono a utilizar: </label>    
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="tipo" value="img" id="img" required>
                                <label class="custom-control-label" for="img">Imagen</label>
                            </div>

                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="tipo" value="zip" id="zip" required>
                                <label class="custom-control-label" for="zip">Zip</label>
                            </div>

                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="tipo" value="doc" id="doc" required>
                                <label class="custom-control-label" for="doc">Doc</label>
                            </div>

                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="tipo" value="pdf" id="pdf" required>
                                <label class="custom-control-label" for="pdf">PDF</label>
                            </div>

                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" name="tipo" value="xls" id="xls" required>
                                <label class="custom-control-label" for="xls">XLS</label>
                            </div>
                        </div>
                        </br>

                        <div>    
                        <label for="clave">Clave del archivo:</label>
                            <input name="clave" type="hidden" class="form-control" id="clave" required/> 
                            <div class="invalid-feedback">Por favor, ingrese la clave del archivo.</div>
                            <div class="valid-feedback">Ok!</div>
                        </div>
                        </br>
                            <input type="submit" name="Submit" value="Subir archivo" class="btn btn-outline-info btn-lg btn-block"/>
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
    </body>
    <footer>
    <?php include_once("estructura/pie.php"); ?>
    </footer>
</html>