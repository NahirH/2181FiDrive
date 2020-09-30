<!-- Compartir un archivo. -->

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
        <script type="text/javascript">
            function showContent() {
                element = document.getElementById("intpass");
                check = document.getElementById("protegerpass");
                if (check.checked) {
                    element.style.display='block';
                }
                else {
                    element.style.display='none';
                }
    }
    </script>

        <script src="js/jquery/jquery-3.5.1.min.js"></script>
        <script src="js/jquery/funciones.js"></script>

            <?php
                $tituloCabecera = "Compartir archivo";
                $textoPie = "Este es el pie.";
                $Titulo = "Compartir archivo"; 
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
                        </div>
                        </br>

                        <div>    
                        <label for="dias">Cantidad de días que se comparte:</label>
                            <input name="dias" type="number" class="form-control" id="dias" required/> 
                            <div class="invalid-feedback">Por favor, ingrese la cantidad de días que se comparte el archivo.</div>
                            <div class="valid-feedback">Ok!</div>
                        </div>
                        </br> 

                        <div>    
                        <label for="descargas">Cantidad de descargas posibles:</label>
                            <input name="descargas" type="number" class="form-control" id="descargas" /> 
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

                        <div>    
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="protegerpass" value="protegerpass" id="protegerpass" onchange="javascript:showContent()">
                                <label class="form-check-label" for="proteger pass">Proteger con contraseña</label>
                            </div>
                            <br/>
                            <div class="intpass" id="intpass" style="display: none;">
                                <label for="pass">Ingrese contraseña</label>
                                <input class="form-control" type="password" name="pass" id="pass">
                            </div>
                            <br/>

                        </div>
                        <br/>

                        <div>    
                            <label>El link generado es:</label>
                            <a href="#">Link del archivo</a>
                        </div>
                        <br/>

                        <div>    
                            <button class="form-control btn-ligth">Generar Hash</button>
                        </div>
                        <br/>

                        <input type="submit" name="Submit" value="Compartir" class="btn btn-outline-info btn-lg btn-block"/>
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