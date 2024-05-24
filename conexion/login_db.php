<?php
  /*
  Ing Diego Alejandro García
  Email. dagarciaag@ut.edu.co
  Tel. 3166573736

  Archivo: login_db.php
  Objetibo: Conexion y validacion de las credenciales de ingreso de usuario 

  */ 

  try {
    
    $base=new PDO("mysql:host=localhost; dbname=bdtic", "root", "");

  	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	$sql="SELECT * FROM usuarios WHERE	email = :miLogin AND contrasenia	= :miPassword "; 
  	$resultado=$base->prepare($sql);
  	$login=htmlentities(addslashes($_POST['login']));
  	$password=htmlentities(addslashes($_POST['password']));
  	$resultado->bindValue(":miLogin", $login);
    $resultado->bindValue(":miPassword", $password);

    $resultado->execute();

    $numero_registro=$resultado->rowCount();

    if ($numero_registro !=0) {

      session_start();
      $_SESSION['usuario']=$_POST['login'];
       
      header("location: ../dashboard.php");
    
     }else{

    $mensaje='error';
    header("Location:  ../login.php?mensaje=$mensaje");
   
    } 

  }catch (Exception $e) {
  	die("Error: " . $e->getMessage());
  }
  
?>