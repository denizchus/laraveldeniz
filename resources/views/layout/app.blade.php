<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/">
  <title> 
      @yield ('titulo')
</title>
</head>

<body>

  <div class="container">

    <header>

      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/unnamed.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>  </h5>
              <p> </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/Trifasica1200x400.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5</h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/portada xd.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/m1.webp" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/portt.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('index')}}">Máquinas Virtuales</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        @yield('menu')
        
        </div>
      </nav>

    </header>
    
    <section>
      <br>

      <div class="row">
        <aside class=" d-none d-sm-none d-md-block d-lg-block d-xl-block col-md-4 ">
          <ul class="list-group">
            <li class="list-group-item">Descripción básica</li>
            <li class="list-group-item list-group-item-primary">Clasificación de Máquinas</li>
            <li class="list-group-item list-group-item-secondary"> Componentes básicos</li>
            <li class="list-group-item list-group-item-success">Comunicación</li>
          </ul>

        </aside>
        <article class="col-md-8 col-ms-12 col-xs-12">

          @yield('contenido')

        </article>
      </div>

    </section>



    <footer class="bg-dark">
      <br>
      <p class="text-center text-white">
        Diseñador Web : Denis Chus <br>
        Todos los derechos reservados 2020
      </p>
      <br>

    </footer>
  </div>
  <script src="js/jquery.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>