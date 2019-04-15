<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Enorelax - Experiencias enoturísticas</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- -->

  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_card.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">


  <!-- Custom styles for this template -->
  <link href="css/carousel.css" rel="stylesheet">
  
    <!--estilos para leaflet-->	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>	
	<link rel="stylesheet" href="css/MarkerCluster.css" />
	<link rel="stylesheet" href="css/MarkerCluster.Default.css" />	
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
	<link rel="stylesheet" href="css/leaflet.zoomhome.css" />
	<link rel="stylesheet" href="css/mapa.css" />
	
	<!--js requeridos para leaflet-->	
	<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet-src.js"></script>
	<script src="js/leaflet.markercluster-src.js"></script>
	<script src="js/leaflet.zoomhome.min.js"></script>
	<script src="js/bodegas.js"></script>
	<script src="js/limite.js"></script>

  
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.html">EnoRelax</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <div class="multi-idioma">
            <ul>
                <li> <a class="en" href="museovino_en.php"><img src="images/united-kingdom.png" alt="English" /></a></li>
                <li> <a class="es" href="museovino.php"><img src="images/spain.png" alt="Castellano" /></a></li>
            </ul>
        </div>
      </div>
    </nav>
  </header>

  <main role="main">

    <div class="home">

      
    <div class="container marketing">
        
       <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Museo del Vino de Cariñena<span></h2>
          <p class="lead">Se emplaza en una antigua bodega de 1918, adquirida por la Denominación de Origen Cariñena en los años 90. La restauración, llevada a cabo por los arquitectos Ángel Comeras, Javier Gracia y José Luis Anadón, ha conservado las partes principales del edificio, incluso la cubierta de madera. Destaca también su fachada modernista.</p>
        </div>
        <div class="col-md-5">
          <img class="rounded-circle" src="images/foto_4.jpg"
            alt="Foto senderismo" width="500" height="400">
        </div>
      </div>

       <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Horarios de visita: </h2>
          <p class="lead">
				<h3>Martes a viernes:</h3>
				de 10:00 a 14:00
				de 16:00 a 18:00</p>
		  <p class="lead">
				<h3>Sábados:</h3>
				de 11:00 a 14:00
				de 16:00 a 18:00</p>
				
		  <p class="lead">
				<h3>Domingos y festivos:</h3>
				de 11:00 a 14:00</p>
        </div>
      </div>
		<hr class="featurette-divider">


    </div><!-- /.container -->


    <!-- FOOTER -->

	  
	 <footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">

			<?php include("footer.html");?>
      </footer>
	
	

  </main>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="js/vendor/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>  
</body>

</html>