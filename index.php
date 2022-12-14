<?php
session_start();
if(!isset($_SESSION['maildelusuario']))
{
	// header('location: login.php');
  // die();
  $textoLogueo="Login";
  $pagLogueo="#loginModal";
}
else{
  $textoLogueo="Logout";
  $pagLogueo="#logoutModal";

}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Integrador CaC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php if (isset($_SESSION['maildelusuario'])){

    
    echo $_SESSION['maildelusuario'];
    echo $_SESSION['rol']; }
    ?>
    <header >
      <script>alert("Bienvenido <?php echo $_SESSION['nombre']?>")</script>
     <nav class="navbar navbar-expand-lg  navbar-dark bg-dark border-bottom ">
        <div class="container-fluid justify-content-end">
          <a class="navbar-brand" href="index.php"><img src="img/codoacodo.png" alt="codoacodo" id="logo"></a>
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
                <a class="nav-link" href="oradores.php">Los oradores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ">Lugar y Fecha</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#oradores-formulario">Convi??rtete en orador</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " id="item_ticket" href="tickets.html">Comprar tickets</a>
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

       
      <div id="a" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active ">
            <img src="img/ba1.jpg" class="d-block w-100 vh-100 img-crsl" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/ba2.jpg" class="d-block w-100 vh-100 img-crsl" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/ba3.jpg" class="d-block w-100 vh-100 img-crsl" alt="...">
          </div>
          <div id="texto-header" >
            <div  class="col-6" id="text-container" >
              <h1>Conf Bs As</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic illum ipsam consequatur harum magni. libero officiis Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet cum provident in optio vel maxime necessitatibus veniam accusantium numquam, voluptatibus eaque nobis distinctio, ipsa hic saepe aperiam deserunt a laboriosam.</p>
              <a href="#" class="btn btn-outline-light">Quiero ser orador</a>
              <a href="/tickets.html" class="btn btn-success">Comprar tickets</a>
            </div>
            
          </div>
         
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
     
    </header>

    <main>
      <div class="align-items-center oradores">
        <p>Conoc?? a los</p>
        <h1>ORADORES</h1>
      </div>
      <div class="card-group" id="card-oradores">
        <div class="card">
          <img src="img/steve.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <span class="badge bg-warning text-dark">Javascript</span>
            <span class="badge bg-info text-dark">React</span>
            <h5 class="card-title">Steve Jobs</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
        <div class="card">
          <img src="img/bill.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <span class="badge bg-warning text-dark">Javascript</span>
            <span class="badge bg-info text-dark">React</span>
            <h5 class="card-title">Bill Gates</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
        <div class="card">
          <img src="img/ada.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <span class="badge bg-secondary">Negocios</span>
            <span class="badge bg-danger">Startups</span>
            <h5 class="card-title">Ada Lovelace</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
        </div>
      </div>
    </main>
    <section >
      <div class="container" id="postal-container" >
        <div class="col-6" >
          <img src="img/honolulu.jpg" alt="" height="450px" id="imagen-postal" >
        </div>
        <div id="info-postal" class="col-6">
          <h2>Bs.As - Octubre</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt explicabo commodi saepe magni, alias ad temporibus facere nobis, adipisci repellat fuga. Id quas asperiores placeat veniam ipsa recusandae accusamus molestias?</p>
          <a href="#" class="btn btn-outline-light">Conoc?? m??s</a>
        </div>
      </div>
    </section>
    <section class="container-fluid" id="oradores-formulario" >
      <div class="align-items-center oradores">
        <p>Convi??rtete en un</p>
        <h2>ORADOR</h2>
        <p>An??tate como orador para dar una charla ignite. Cu??ntanos de qu?? quieres hablar!</p>
      </div>
    </section>
    <section class="container-fluid">
      <form class="row oradores-form" action="oradores.php" method="POST">
        <div class="col-md-6 py-4">
          <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
        </div>
        <div class="col-md-6 py-4">
          <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido">
        </div>
        <div class="col-md-12">
          <textarea class="form-control" name="tematica" rows="6" placeholder="Sobre qu?? quieres hablar?" ></textarea>
        </div>
        <div >
          <br>
          <input class="btn btn-success form-control" type="submit" name="btn-form" id="btn-form" value="Enviar">
        </div>
      </form>
    </section>
    <footer class="container-fluid flex-wrap">
      <div class="row">
        <div class="btn-footer">
            <a href="">FAQ??s</a></div>
        </div>
        <div class="btn-footer">     
             <a href="">Cont??ctanos</a>
        </div>
        <div class="btn-footer">    
              <a href="">Prensa</a>
        </div>
        <div class="btn-footer">    
              <a href="">Conferencias</a>
        </div>
        <div class="btn-footer">    
              <a href="">T??rminos y<br>condiciones</a>
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