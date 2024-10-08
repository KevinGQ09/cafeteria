<?php
include("../Config/Global.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--Estilos de Bootstrap-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

   <!--Styles Personalizado-->
   <link rel="stylesheet" href="../Estilos/stylesIndex.css">
   <title>Document</title>

   <!--Estilos Google Fonst-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz@8..144&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
</head>

<body>

   
<?php 
   include("Head.php");
   ?>
   <!--Primer Seccion-->

   <section class="primera-seccion">
      <div class="seccion-contenido">
         <p class="titulo-cafe">Café Delicioso</p>
         <h1 class="subtitulo-cafe">The Best Coffe <br> In The World</h1>
         <a href="">Comprar Ahora</a>
      </div>
   </section>

   <!--Segunda Seccion-->

   <section class="segunda-seccion mt-3">
      <div class="container-fluid">
         <div class="row ">

            <div class="col-lg-3 col-md-6 col-12 mb-3">
               <div class="tarjetas">
                  <div class="icono-info">
                     <i class="bi bi-airplane-fill"></i>
                  </div>
                  <div class="info-contenido">
                     <span>Envío Gratuito</span>
                     <p>100% seguro</p>
                  </div>
               </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-3">
               <div class="tarjetas">
                  <div class="icono-info">
                     <i class="bi bi-wallet-fill"></i>
                  </div>
                  <div class="info-contenido">
                     <span>Contrarembolsos</span>
                     <p>Devolución de dinero</p>
                  </div>
               </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-3">
               <div class="tarjetas">
                  <div class="icono-info">
                     <i class="bi bi-basket2-fill"></i>
                  </div>
                  <div class="info-contenido">
                     <span>Tarjetas de regalo</span>
                     <p>Mejores premios</p>
                  </div>
               </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12 mb-3">
               <div class="tarjetas">
                  <div class="icono-info">
                     <i class="bi bi-headphones"></i>
                  </div>
                  <div class="info-contenido">
                     <span>Servicio al cliente</span>
                     <p>De 24/7</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!--Tercera Seccion-->
   <section>
      <div class="container-fluid titulo-categorias">
         <p>Mejores Categorias</p>
      </div>
      <div class="container contenedor-categoria">

         <div class="row justify-content-center ">

            <div class="col-lg-4 col-10 mb-3">
               <div class="t-categoria cafe">
                  <div class="inf-categoria">
                     <h1>Café</h1>
                     <p>Ver más</p>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 col-10 mb-3">
               <div class="t-categoria sandwiches">
                  <div class="inf-categoria">
                     <h1>Sandwiches</h1>
                     <p>Ver más</p>
                  </div>
               </div>
            </div>

            <div class="col-lg-4 col-10 mb-3">
               <div class="t-categoria postres">
                  <div class="inf-categoria">
                     <h1>Postres</h1>
                     <p>Ver más</p>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </section>

   <!--Cuarta Seccion-->
   <section>
      <div class="container-fluid titulo-blogs">
         <p>Mis Blogs</p>
      </div>
      <div class="container">
         <div class="row justify-content-center">

            <div class="col-lg-3 mb-4 contenedor-blog">
               <div class="card tarjeta p-3">
                  <div class="card-imagen">
                     <img src="../imagenes/blog1.jpg" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body card-cuerpo">
                     <h1>Lorem ipsum, dolor sit</h1>
                     <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque, atque
                        excepturi illo, quod illum nulla mollitia iure distinctio soluta.
                     </p>
                  </div>
               </div>
            </div>

            <div class="col-lg-3 mb-4 contenedor-blog">
               <div class="card tarjeta p-3">
                  <div class="card-imagen">
                     <img src="../imagenes/blog2.jpg" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body card-cuerpo">
                     <h1>Lorem ipsum, dolor sit</h1>
                     <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque, atque
                        excepturi illo, quod illum nulla mollitia iure distinctio soluta.
                     </p>
                  </div>
               </div>
            </div>

            <div class="col-lg-3 mb-4 contenedor-blog">
               <div class="card tarjeta p-3">
                  <div class="card-imagen">
                     <img src="../imagenes/blog3.jpg" class="card-img-top" alt="...">
                  </div>
                  <div class="card-body card-cuerpo">
                     <h1>Lorem ipsum, dolor sit</h1>
                     <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque, atque
                        excepturi illo, quod illum nulla mollitia iure distinctio soluta.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </section>

   <footer>
      <div class="footer-contenedor container-fluid">
         <div class="footer-icons">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-whatsapp"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
         </div>
         <div class="footer-info">
            <ul class="footer-lista">
               <li><a href="">Home</a></li>
               <li><a href="">News</a></li>
               <li><a href="">About</a></li>
               <li><a href="">Contact Us</a></li>
               <li><a href="">Our Team</a></li>
            </ul>
         </div>
         <div class="footer-text">
            <p>Copyringht &copy;2024; Designed by Fahemm</p>
         </div>
      </div>
   </footer>

   <?php include("Modales/ModalCarrito.php")?>

   <!--Scrips Bootstrap-->
   <script src="../JS/jquery.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  

</body>

</html>