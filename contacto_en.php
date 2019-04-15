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
  
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_card.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">


  <!-- Custom styles for this template -->
  <link href="css/carousel.css" rel="stylesheet">
  
	
	<!--js requerido para validar formulario-->	
	<script src="js/validarformulario.js"></script>


  
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
                <li> <a class="en" href="contacto_en.php"><img src="images/united-kingdom.png" alt="English" /></a></li>
                <li> <a class="es" href="contacto.php"><img src="images/spain.png" alt="Castellano" /></a></li>
            </ul>
        </div>
      </div>
    </nav>
  </header>

  <main role="main">

    <div class="home">

      
    <div class="container marketing">
		<div class="row formulario">
		<div class="col-lg-6 mb-4" >		
          <h2 class="contacto">Contact form</h2>  
          <form name="sentMessage" id="contactForm" onsubmit='return validar()' action="envia.php" method="post" >
              <div class="controls">
                <label>Name:</label>
                <input type="text" class="form-control" name="Nombre" id="Nombre" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
   
			<div class="control-group form-group">
              <div class="controls">
                <label>Surname:</label>
                <input type="text" class="form-control" name="apellidos" id="apellidos" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone:</label>
                <input type="tel" class="form-control" name="telefono" id="telefono" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Your question:</label>
                <textarea rows="10" cols="100" class="form-control" name="message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
			<input type='checkbox' value='SI' id='acepto'/>
			I agree to the Privacy Policy
			</label>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-info" id="sendMessageButton">Enviar</button>
			<t></t>
          </form>
		</div>
		
		
		<div class="col-lg-4 mb-4">
	    <br>
	    
       <h2 class="contacto">Where we are?</h2>  	  
		<p class= "descripcion">
            
			<br>
			Paseo de Sagasta 30 <br>
            <br>Zaragoza, ES 50004
            <br>			
          </p>
          <p class= "descripcion">
            <abbr title="Phone">P</abbr>: (+34) 976 123456 / (+34) 600 010203
          </p>
          <p class= "descripcion">
            <abbr title="Email">E</abbr>:
            <a href="mailto:info@enorelax.com">info@enorelax.com
            </a>
          </p>
          <p class= "descripcion">
            <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 18:00 PM
          </p>
		</div>
		
	
	
	</div>



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