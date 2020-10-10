<?php 
    $tituloCabecera = "Añadir/Modificar Archivo";
    $textoPie = "Este es el pie.";
    $Titulo = "Añadir/Modificar Archivo"; 


include_once("estructura/cabecera.php");
include_once("../CONTROL/control_archivo.php");
include_once("../utiles/funciones.php");

$datos = data_submitted();
$obj = new control_archivo();

if ($datos["clave"]==0){
    $obj = new control_archivo();
    $respuesta = $obj->altaArchivo($datos);

} else {
    $obj = new control_archivo();
    $respuesta = $obj->modificarArchivo($datos);

}

?>


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
        <script type="text/javascript" src="js/jquery/editor.js"></script>	
    </head>
    <body>

    <div class="container" style="margin-top: 20px; margin-bottom: 20px";>
            <div class="row">
                <div class="col-sm-3 d-md-block bg-light sidebar collapse" id="sidebarMenu">
                    <?php include_once("estructura/menu.php"); ?>
                </div>


                <div class="col-sm-9">
                    <div class="col-sm-9 mx-auto">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                           <?php
                           echo "<h5>";
                           print_r($respuesta['mensaje']);
                           echo"</h5></br>";
                           echo "<h6>Nombre del archivo: </h6>".$respuesta['nombre']."</br>";
                           echo "<h6><h6>Descripción: </h6>".$respuesta['descr']."</br>";
                           echo "<h6>Tipo de archivo: </h6>".$respuesta['tipo']."</br>";
                           echo "<h6>Usuario: </h6>".$respuesta['user']."</br>";
                           echo "<h6>Clave: </h6>".$respuesta['clave']."</br>";

                           ?>
                    </div>
                    <a href="amarchivo.php" class="btn btn-outline-info" role="button">Volver</a>
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
  <?php
  
  include_once("estructura/pie.php");
  
  ?>

  </footer>
</html>