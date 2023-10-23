<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA HOUSE</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<!--    animacion js dela pagona aos-->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!--    iconos de bootstrap-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="fontawesome-free6/css/all.css">
   
    <link rel="stylesheet" href="./vista/estilo.css">

</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
        
          <a class="nav-link" href="#">Inicio</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Nosotros</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Servicios</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Galeria</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Noticias</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
      

      </ul>
     
    </div>
    
  </div>
  
</nav>

<!--****************************************************************-->
<!--BOTONERA -->
<!--**********************************************************************-->
   <section class="menu container-fluid bg-danger mt-5">
    <div class="container">

    <ul class="nav nav-justified pt-4 nav-pills " >
    <?php if(isset($_GET['pagina'])): ?>
   
          <?php if($_GET['pagina']=='registro'):?>
              <li class="nav-item">
                      <a href="index.php?pagina=registro" class="nav-link active " >Registro</a>
                </li>
          <?php else: ?>
              <li class="nav-item">
                      <a href="index.php?pagina=registro" class="nav-link " >Registro</a>
                </li>
          <?php endif ?>
          
          <?php if($_GET['pagina']=='ingreso'):?>
              <li class="nav-item">
                      <a href="index.php?pagina=ingreso" class="nav-link active " >Ingreso</a>
                </li>
          <?php else: ?>
              <li class="nav-item">
                      <a href="index.php?pagina=ingreso" class="nav-link " >Ingreso</a>
                </li>
          <?php endif ?>

          <?php if($_GET['pagina']=='inicio'):?>
              <li class="nav-item">
                      <a href="index.php?pagina=inicio" class="nav-link active " >Inicio</a>
                </li>
          <?php else: ?>
              <li class="nav-item">
                      <a href="index.php?pagina=inicio" class="nav-link " >Inicio</a>
                </li>
          <?php endif ?>

          <?php if($_GET['pagina']=='salir'):?>
              <li class="nav-item">
                      <a href="index.php?pagina=salir" class="nav-link active " >Salir</a>
                </li>
          <?php else: ?>
              <li class="nav-item">
                      <a href="index.php?pagina=salir" class="nav-link " >Salir</a>
                </li>
          <?php endif ?>


    <?php else: ?>
      
            <li class="nav-item">
                <a href="index.php?pagina=registro" class="nav-link active" >Registro</a>
            </li>

            <li class="nav-item">
                <a href="index.php?pagina=ingreso" class="nav-link">Ingreso</a>
            </li>

            <li class="nav-item">
                <a href="index.php?pagina=inicio" class="nav-link ">Inicio</a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">Salir</a>
            </li>
            
        
    <?php endif ?>
    
    </ul>
    
    

       

   
     
   
    </div>
   </section>

   <!--****************************************************************-->
<!--CONTENIDO -->
<!--**********************************************************************-->
<section class="container-fluid">
        <div class="container pt-5">
<?php
     //ISSET: isset() determina si una variable esta definida y no es NULL
     if(isset($_GET['pagina'])){
      if($_GET['pagina']=='registro' || $_GET['pagina']=='ingreso' || $_GET['pagina']=='inicio' ||$_GET['pagina']=='salir')
      {
        include"paginas/".$_GET['pagina'].'.php';
      }else{
        include"paginas/error404.php";
      }
   }else{
    include "paginas/registro.php";
   }
   
   
   
   
   ?>

</div>
   </section>
   


<!--section footer-->
<footer class="bg-dark p-2 text-center">
    <div class="container">
        <p class="text-white">All Right reserved @Website Name</p>
    </div>
</footer>
 
  
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>