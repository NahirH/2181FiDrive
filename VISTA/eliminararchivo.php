<!-- Eliminación de un archivo. -->

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
                $tituloCabecera = "Eliminar archivo";
                $textoPie = "Este es el pie.";
                $Titulo = "Eliminar archivo"; 
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
                    <form id="formularionumero" name="formularionumero" method="POST" enctype="multipart/form-data" action="#" class="needs-validation" novalidate>
                        <div>    
                        <label for="nombre">Nombre del archivo: 1234.png</label>
                        </div>
                        </br>

                        <div>    
                        <label for="cantdesc">Cantidad de veces compartido: </label>                            
                        </div>
                        </br>

                        <div>    
                        <label for="clave">Motivo para eliminar el archivo:</label>
                            <textarea name="motivo" type="text" class="form-control" id="motivo" required></textarea>
                            <div class="invalid-feedback">Por favor, ingrese sus motivos eliminar el archivo.</div>
                            <div class="valid-feedback">Ok!</div>
                        </div>
                        </br>

                        <div>    
                        <label for="user">Seleccione usuario:</label>
                            <select name="user" class="custom-select" required>
                                <option selected disabled value="">Seleccione...</option>
                                <option id="adm">Admin</option>
                                <option id="visit">Visitante</option>
                                <option id="usted">Usted</option>
                            </select>
                            
                            <div class="invalid-feedback">Por favor, seleccione al menos una opción.</div>
                            <div class="valid-feedback">Ok!</div>
                        </div>
                        </br>
                            <div class="botones" style="float: right;">
                                <a href="contenido.php" class="btn btn-outline-primary btn-lg">Volver</a>
                                <input type="submit" name="Submit" value="Eliminar" class="btn btn-outline-danger btn-lg"/>
                            </div>
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