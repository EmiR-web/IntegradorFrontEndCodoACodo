<?php

class conectarse{
// definicion de atributos
private $host;
private $user;
private $password;
private $database;
private $conn;
private $tabla_datos;
private $tabla_user;
private $tabla_rol;

public function __construct(){
$this->user='root';
$this->password='123456';
$this->database='codoacodo_pruebas';
$this->host='127.0.0.1';
$this->tabla_datos='user_integrador_datos';
$this->tabla_user='user_integrador';
$this->tabla_rol='rol';
}

public function conecta(){
// crea y retorna la conexión con la BD
$this->conn= new mysqli($this->host, $this->user, $this->password, $this->database);
if($this->conn->connect_errno){
    die("Error de conexión: (" . $this->conn->connect_error . ")" . $this->conn->connect_errno);
}
}
public function cerrarbd(){
// Metodo que cierra la conexion con la BD
$this->conn->close();
}
public function ejecutar($sql){
$result = $this->conn->query($sql);
return $result;
}
public function renglones(){
return $this->conn->affected->rows;
}
public function ultimorenglon($result){
    return $result->fetch_row();
}
public function limpiarquery($result){

    $result->free_result();
}
}
?>
