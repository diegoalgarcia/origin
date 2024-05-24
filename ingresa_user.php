<?php 

include("conexion/conexion.php");
 
    // este archivo ingresa los usuarios administrativos
    $nombre=$_POST['nombre'];	                          
    $email=$_POST['email'];  
	  $password=$_POST['password']; 
    

    $sql="INSERT INTO usuarios 
          (nombre, email, contrasenia)
    VALUES(:miNom, :miEmail, :miContra)";
    
   $resultado=$base->prepare($sql);

$resultado->execute(array(":miNom"=>$nombre, ":miEmail"=>$email, ":miContra"=>$password));
    
     $mensaje='error';
    //  header("location:form_registro.php?mensaje=$mensaje");*/
    header("location:index.php");
     echo "Exito al ingresar el registro de Modulo...";
?>