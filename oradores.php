<?php 
session_start();
if(!isset($_SESSION['maildelusuario']))
{
	
  $textoLogueo="Login";
  $pagLogueo="#loginModal";
  $userAdmin=false;

}
else{
  $textoLogueo="Logout";
  $pagLogueo="#logoutModal";
  $userAdmin=$_SESSION['rol']=="ADMIN";


}
require("./clases/basededatos.php");

$NuevaConexion = new conectarse();
$NuevaConexion->conecta();


if (isset($_POST['btn-form']))
{

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$tematica=$_POST['tematica'];


$query="INSERT INTO oradores_integrador (nombre,apellido,tematica) VALUES ('$nombre','$apellido','$tematica')";
$NuevaConexion->ejecutar($query);     

header('location:index.php');
die();
}
else if (isset($_POST['btn-form-mod']))
{

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$tematica=$_POST['tematica'];

$query="UPDATE oradores_integrador SET nombre='$nombre' , apellido='$apellido', tematica='$tematica' WHERE id=$id";
$NuevaConexion->ejecutar($query);     

header('location:oradores.php');
die();
}
else if (isset($_POST['btn-form-elim']))
{

$id=$_POST['id'];


$query="DELETE FROM oradores_integrador WHERE id=$id";
$NuevaConexion->ejecutar($query);     

header('location:oradores.php');
die();
}
else{
    $query="SELECT * FROM oradores_integrador";
    $listado=$NuevaConexion->ejecutar($query);   

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="oradores.css">

    <!-- JavaScript Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
    <title>Oradores</title>
</head>
<body id="lista-oradores" class="bg-dark">
<header >
     <nav class="navbar navbar-expand-lg  navbar-dark bg-dark border-bottom ">
        <div class="container-fluid justify-content-end">
          <a class="navbar-brand" href="index.html"><img src="img/codoacodo.png" alt="codoacodo" id="logo"></a>
          <a class="nav-link active text-light me-4" aria-current="page" href="#">Conf. Bs. As.</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">La conferencia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Los oradores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ">Lugar y Fecha</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="index.php#oradores-formulario">Conviértete en orador</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " id="item_ticket">Comprar tickets</a>
              </li>
              <li class="nav-item">
                <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=<?=$pagLogueo?>>
                    <?=$textoLogueo ?><i class="bi bi-box-arrow-in-right"></i></button>
            </li>
            </ul>
          </div>
        </div>
      </nav>
      <?php include 'loginModal.php' ?>
      <?php include 'logoutModal.php' ?>
</header> 
  <div class="d-flex justify-content-center align-items-center p-4">
  <h2 class="text-white mx-4">Lista de oradores</h2>
  <?php if($userAdmin) {?>
  <div>
      <button class="btn btn-sm btn-success" type="button" data-bs-toggle="modal" data-bs-target="#modificarModal"><i class="bi bi-plus-square"></i>Agregar</button>
  </div><?php };?>
  </div>

<table class="container table table-dark table-hover mt-5" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">TEMÁTICA</th>
      <?php if($userAdmin) {?>
        <th scope="col" class="col-1"></th>
        <th scope="col" class="col-1"></th>
      <?php }?>

    </tr>
  </thead>
  <tbody>
    <?php while ($lista =mysqli_fetch_array($listado))
    { ?>
   

    <tr>
      <th scope='row' id="id-orador"><?php echo $lista['id'] ?></th>
      <td><?php echo $lista['nombre'] ?></td>
      <td><?php echo $lista['apellido'] ?></td>
      <td><?php echo $lista['tematica'] ?></td>
      <?php if($userAdmin) {?>
        <td ><button class="btn btn-sm btn-warning" type="button" data-bs-toggle="modal" data-bs-id="<?php echo $lista['id'];?>" data-bs-target="#modificarModal"><i class="bi bi-pencil-fill"></i>Editar</button></td>
        <td ><button class="btn btn-sm btn-danger" type="button" data-bs-toggle="modal" data-bs-id="<?php echo $lista['id'];?>" data-bs-target="#eliminarModal"><i class="bi bi-x-lg"></i>Eliminar</button></td>
        <?php }?>
    </tr>
    <?php };?>
  </tbody>
</table>
<?php include 'modificarModal.php' ?>
<?php include 'eliminarModal.php' ?>



<script>

let modificarModal= document.getElementById('modificarModal');

modificarModal.addEventListener('shown.bs.modal', event => {
  let button=event.relatedTarget;
  let id= button.getAttribute('data-bs-id');

  let inputId=modificarModal.querySelector('.modal-body #id');
  let inputNombre= modificarModal.querySelector('.modal-body #nombre');
  let inputApellido= modificarModal.querySelector('.modal-body #apellido');
  let inputTematica= modificarModal.querySelector('.modal-body #tematica');

  let url = 'getOradores.php';
  let formData = new FormData();
  formData.append('id',id);

  fetch(url, {
    method: 'POST',
    body: formData,
  }).then(response => response.json())
  .then(data=>{
    inputId.value=data.id;
    inputNombre.value=data.nombre;
    inputApellido.value=data.apellido;
    inputTematica.value=data.tematica;
  }).catch(err => console.log(err));

});
let eliminarModal= document.getElementById('eliminarModal');

eliminarModal.addEventListener('shown.bs.modal', event => {
  let button=event.relatedTarget;
  let id= button.getAttribute('data-bs-id');

  let inputId=eliminarModal.querySelector('.modal-footer #id');
  let mensajeEliminar=eliminarModal.querySelector('.modal-body #mensaje');


  let url = 'getOradores.php';
  let formData = new FormData();
  formData.append('id',id);

  fetch(url, {
    method: 'POST',
    body: formData,
  }).then(response => response.json())
  .then(data=>{
    inputId.value=data.id;
    mensajeEliminar.innerText=`¿Desea eliminar el registro del orador ${id}?`;
  }).catch(err => console.log(err));

});

</script>

<footer class="container-fluid flex-wrap">
      <div class="row">
        <div class="btn-footer">
            <a href="">FAQ´s</a></div>
        </div>
        <div class="btn-footer">     
             <a href="">Contáctanos</a>
        </div>
        <div class="btn-footer">    
              <a href="">Prensa</a>
        </div>
        <div class="btn-footer">    
              <a href="">Conferencias</a>
        </div>
        <div class="btn-footer">    
              <a href="">Términos y<br>condiciones</a>
        </div>
        <div class="btn-footer">    
              <a href="">Privacidad</a>
        </div>
        <div class="btn-footer">     
             <a href="">Estudiantes</a>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="/script.js"></script>
</body>
</html>