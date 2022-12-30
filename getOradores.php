<?php
session_start();

require("./clases/basededatos.php");

$NuevaConexion = new conectarse();
$NuevaConexion->conecta();

$id=$_POST['id'];
$query="SELECT * FROM oradores_integrador WHERE id=$id LIMIT 1";
$result = $NuevaConexion->ejecutar($query);  
$row_cnt = $result->num_rows;

$orador = [];

if($row_cnt>0){
    $orador = mysqli_fetch_array($result);
}
echo json_encode($orador,JSON_UNESCAPED_UNICODE);
?>