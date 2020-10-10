<!-- Link a todos las funcionalidades. -->

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

        <!-- Scripts-->
        <script src="js/jquery/jquery-3.5.1.min.js"></script>
        <script src="js/jquery/funciones.js"></script>
        <script type="text/javascript" src="js/editor.js"></script>	

            <?php
                $tituloCabecera = "2181FiDrive";
                $textoPie = "Este es el pie.";
                $Titulo = "2181FiDrive"; 
                include_once("estructura/cabecera.php");
                include_once("../CONTROL/control_archivo.php");
                $obj = new control_archivo();
                $arreglo = $obj->obtenerArchivos();

            ?>

    </head>
    <body>
    <div class="container" style="margin-top: 20px; margin-bottom: 20px";>
            <div class="row">
                <div class="col-sm-2 d-md-block bg-light sidebar collapse" id="sidebarMenu">
                <?php include_once("estructura/menu.php"); ?>
                </div>
                
                <div class="col-sm-10">
                <div class="col-sm-10 mx-auto">
                <h4 style="display: inline-block">Archivos subidos:</h4>
                 
                    <ul class="list-group">
                    <!--mostrar recursivamente los archivos del contenidos en la carpeta llamada archivos!-->
                    <?php
                    $dir = "../archivos/";

                    /**foreach ($arreglo as $archivo){
                        if ($archivo->isDir($dir)){
                            echo "<li class='list-group-item'>";
                            echo "<a href='../archivos/$archivo'>".$archivo."</a>";
                            echo "<div style='display: inline-block; float: right'>";
                            echo "<a href= 'amarchivo.php' value='Modificar' class='btn btn-outline-secondary'>Modificar</a>";
                            echo "<a href= 'compartirarchivo.php' value='Compartir' class='btn btn-outline-primary'>Compartir</a>";
                            echo "<a href= 'eliminararchivo.php' value='Eliminar' class='btn btn-outline-danger'>Eliminar</a>";
                            echo "</div>";
                            echo "</li>";
                        } else {
                        echo "<li class='list-group-item'>";
                        echo "<a href='../archivos/$archivo'>".$archivo."</a>";
                        echo "<div style='display: inline-block; float: right'>";
                        echo "<a href= 'amarchivo.php' value='Modificar' class='btn btn-outline-secondary'>Modificar</a>";
                        echo "<a href= 'compartirarchivo.php' value='Compartir' class='btn btn-outline-primary'>Compartir</a>";
                        echo "<a href= 'eliminararchivo.php' value='Eliminar' class='btn btn-outline-danger'>Eliminar</a>";
                        echo "</div>";
                        echo "</li>";
                        }
                    }*/
                    
                    function listar_directorios_ruta($ruta){
                        if (is_dir($ruta)){
                            if ($dh = opendir($ruta)){
                                echo "<li class='list-group-item'>";
                                echo "<a href='$ruta'>".$ruta."</a>";
                                echo "<div style='display: inline-block; float: right'>";
                                echo "<a href= 'amarchivo.php' value='Modificar' class='btn btn-outline-secondary'>Modificar</a>";
                                echo "<a href= 'compartirarchivo.php' value='Compartir' class='btn btn-outline-primary'>Compartir</a>";
                                echo "<a href= 'eliminararchivo.php' value='Eliminar' class='btn btn-outline-danger'>Eliminar</a>";
                                echo "<a href= 'amarchivo.php' class='btn btn-success'>+ Carpeta</a>";
                                echo "</div>";
                                echo "</li>";

                                while (($file = readdir($dh)) !== false){    
                                    if ($file!="." && $file!=".."){
                                        echo "<li style='list-style-type: none'>";
                                        echo "<a href='$ruta$file'>".$ruta.$file."</a>";
                                        echo "<div style='display: inline-block; float: right'>";
                                        echo "<a href= 'amarchivo.php' value='Modificar' class='btn btn-outline-secondary'>Modificar</a>";
                                        echo "<a href= 'compartirarchivo.php' value='Compartir' class='btn btn-outline-primary'>Compartir</a>";
                                        echo "<a href= 'eliminararchivo.php' value='Eliminar' class='btn btn-outline-danger'>Eliminar</a>";
                                        echo "</div>";
                                        echo "</li>";
                                        echo "</br>";
                                        listar_directorios_ruta($ruta . $file . DIRECTORY_SEPARATOR);
                                    }
                                    
                                }
                                
                                closedir($dh);
                            }
                        }
                    }
                        listar_directorios_ruta($dir);
                    ?>

                    
                    </ul>



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