<?php

class control_archivo{

    public function controlesObligatorios($archivo){
        $valido = true;
        if ($valido && $archivo["nombre"]==""){
            $mensaje = "El nombre del archivo no puede quedar vacío.";
            $valido = false;
        }

        if ($valido && $archivo[""]){
            $mensaje = "Debe seleccionarse un usuario.";
            $valido = false;
        }
        $respuesta = array("mensaje" => $mensaje, "validez" => $valido);
        return ($respuesta);
    }

    public function altaArchivo($datos){
        $nombreArchivoSubido=$_FILES['archivo']['name'];
        $nombreArchivo = $datos['nombre'];
        $descripcion = $datos['desc_archivo'];
        $nombreArchivoDescripcion = substr($nombreArchivoSubido,0, strlen($nombreArchivoSubido)-4)."_desc.txt";
        $usuario = $datos['user'];
        $tipoArchivo = $datos['tipo'];
        $clave = $datos['clave'];


        $dir = "../archivos/";

        if ($_FILES["archivo"]["error"] <= 0) {
            $valido=true;
            $mensaje="";
        } else {
            $valido=false;
            $mensaje = "ERROR: no se pudo cargar el archivo.";

        }

        if ($valido && !copy($_FILES['archivo']['tmp_name'], $dir.$nombreArchivoSubido)){
            $mensaje= "ERROR: no se pudo copiar el archivo.";
            $valido=false;
        } 

        if ($valido && $descripcion!=""){
            $fArchivoaCrear=fopen($dir.$nombreArchivoDescripcion, "w");
            fwrite($fArchivoaCrear, $descripcion);
            fclose($fArchivoaCrear);
        } else {
            $valido = false;
            $mensaje = "No se ha ingresado una descripción.";
            
        }


        if ($valido){
            $error = "El archivo se ha subido correctamente.";
            $respuesta = array (
                "nombre" => $nombreArchivo,
                "descr" => $descripcion,
                "user" => $usuario,
                "tipo" => $tipoArchivo,
                "clave" => $clave,
                "mensaje" => $mensaje            
            );
        }

        return $respuesta;

    }

    public function crearDirectorio(){

        
    }

    public function modificarArchivo($archivo){


    }

    public function devolverNombre($datos){
        # code...
    }

    public function obtenerArchivos(){
        $directorio = "../archivos/";
        $archivos = scandir($directorio, 1);
        return $archivos;
    }

    public function eliminarCompartido($archivo){
        # code...
    }

    public function eliminarArchivo(){

        
    }



}

?>