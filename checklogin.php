<?php
session_start();

if(isset($_POST['btn-ingresar']))
{


echo $_POST['email'] . "<BR>";
echo $_POST['password'] . "<BR>";

require("./clases/basededatos.php");

$NuevaConexion = new conectarse();
$NuevaConexion->conecta();

$email=$_POST['email'];
$pass=$_POST['password'];

$query="Select * from user_integrador where email = '".$email."' and password = '".$pass."'";
$result = $NuevaConexion->ejecutar($query);      
$row_cnt = $result->num_rows;

if($row_cnt == 1)
{
    $queryRol="SELECT r.rol_nombre  FROM rol r INNER JOIN user_integrador u ON u.rol_usuario_id=r.id AND u.email = '$email' ";
    $queryNombre="SELECT nickname  FROM user_integrador  WHERE email = '$email' ";
    $rol=$NuevaConexion->ejecutar($queryRol);
    $nombre =$NuevaConexion->ejecutar($queryNombre);
    $_SESSION['maildelusuario']=$email;
    $listaRol =mysqli_fetch_array($rol);
    $_SESSION['rol']=$listaRol['rol_nombre'];
    $listaNombre =mysqli_fetch_array($nombre);
    $_SESSION['nombre']=$listaNombre['nickname'];
    header("location: index.php");
    die();
}
else if ($row_cnt == 0)
{
    echo "<script>alert('Usuario no existe');window.location= 'index.php' </script>";
}

}else if(isset($_POST['btn-logout'])){
    session_destroy();
    header('location: index.php');
    die();
  }
?>