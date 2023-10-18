<?php
function crear_conexion(){
$conexion=new mysqli('localhost','root','','amayagod');
return $conexion;
}

function ingresar($usuario,$contraseña){
    $conexion=crear_conexion();
    $salida='';
    $consulta="SELECT * FROM usuarios WHERE usuario='$usuario'  AND  $contraseña='$contraseña'";
    $resultado=$conexion->query($consulta);
    if($resultado==true){
        if($resultado->num_rows>0){
      while($fila=$resultado->fetch_assoc()){
      $salida.='nombre: '.$fila['nombre'].' usuario:'.$fila['usuario'].'contraseña:'.$fila['contraseña'];
      $salida.='<br>';
        }
      $resultado->close();
      return $salida;
    }else{
        $salida = 'la consulta esta mal ';
    }
    }
    }


?>