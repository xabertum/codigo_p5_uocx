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
          <h2 class="featurette-heading">Cariñena Wine Museum<span></h2>
          <p class="lead">It is located in an old winery from 1918, acquired by the Cariñena Denomination of Origin in the 90's. The restoration, carried out by the architects Ángel Comeras, Javier Gracia and José Luis Anadón, has conserved the main parts of the building, including the wooden deck. It also highlights its modernist facade.</p>
        </div>
        <div class="col-md-5">
          <img class="rounded-circle" src="images/foto_4.jpg"
            alt="Foto senderismo" width="500" height="400">
        </div>
      </div>

       <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Visit hours: </h2>
          <p class="lead">
				<h3>Tuesday to friday:</h3>
				From 10:00 to 14:00
				From 16:00 to 18:00</p>
		  <p class="lead">
				<h3>Saturday:</h3>
				From 11:00 to 14:00
				From 16:00 to 18:00</p>
				
		  <p class="lead">
				<h3>Sunday</h3>
				From 11:00 to 14:00</p>
        </div>
      </div>
		<hr class="featurette-divider">


    </div><!-- /.container -->


    <!-- FOOTER -->
	<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
	 <?php include("footer_en.html");?>
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