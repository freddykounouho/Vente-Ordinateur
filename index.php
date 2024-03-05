<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beat2/dist/css/bootstrap.min.css" integrity="sha384-BmbxuPwQa2lc/FVzBcNJUAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolfldl" crossorigin="anonymous">
 
  <link rel="stylesheet" type="text/css" href="cssStyle/bootstrap.css">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet"  href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="vente.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"  >
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css"  rel="stylesheet"  >

  <style>
    .ho:hover {
      text-shadow: none !important;
      box-sizing: border-box !important;
      cursor: pointer !important;
      transition: all 0.3s ease !important;
      -webkit-transform: scale(1.1) !important;
      -ms-transform: scale(1.1) !important;
      transform: scale(1.1) !important;
      z-index: 2;
    }
  </style>
	<title>Mon site</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-pink">
    <a class="navbar-brand" href="#">Mon entreprise</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#accueil">Accueil</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="service.php">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="about.php">À propos</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="suggestion.php">Discussion</a>
        </li>
      </ul>
    </div>
  </nav>
	
  <center>
    <section id="accueil">
    <h2>Bienvenue sur notre site dédié à la vente des ordinateurs</h2>
  </section>
  </center>

<!-- Create the carousel -->
<div id="carouselExample" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExample" data-slide-to="1"></li>
    <li data-target="#carouselExample" data-slide-to="2"></li>
    <li data-target="#carouselExample" data-slide-to="3"></li>
    <li data-target="#carouselExample" data-slide-to="4"></li>
    <li data-target="#carouselExample" data-slide-to="5"></li>
    <li data-target="#carouselExample" data-slide-to="6"></li>
    <li data-target="#carouselExample" data-slide-to="7"></li>
    <li data-target="#carouselExample" data-slide-to="8"></li>
    <li data-target="#carouselExample" data-slide-to="9"></li>
    <li data-target="#carouselExample" data-slide-to="10"></li>
    <li data-target="#carouselExample" data-slide-to="11"></li>
    <li data-target="#carouselExample" data-slide-to="12"></li>
  </ol>

  <!-- Wrapper for slides -->
  <center>
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/1.jpg" alt="Image 1" height="600" width="1200">
    </div>

    <div class="carousel-item">
      <img src="image/2.jpg" alt="Image 2" height="600" width="1200">
    </div>

    <div class="carousel-item">
      <img src="image/3.jpg" alt="Image 3" height="600" width="1200">
    </div>

    <div class="carousel-item">
      <img src="image/4.jpg" alt="Image 4" height="600" width="1200">
    </div>

    <div class="carousel-item">
      <img src="image/5.jpg" alt="Image 5" height="600" width="1200">
    </div>

    <div class="carousel-item">
      <img src="image/6.jpg" alt="Image 6" height="600" width="1200">
    </div>

    <div class="carousel-item">
      <img src="image/7.jpg" alt="Image 7" height="600" width="1200">
    </div>
  </div>

</center>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


  
  <!-- Project start -->
  <div class="pt-5">
    <div class="container pt-5">
      <div class="row"> 
        <div class="col-lg-4 pb-5 wow fadeInLeft slow">
          <!-- Card -->
          <div class="card ho">
            <!-- image -->
            <div class="view overlay">
              <img class="card-img-top" src="image/5.jpg" alt="card image cap">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Card content -->
            <div class="card-body">
              <!-- Title -->
              <h4 class="card-title">Hp pavillon</h4>
              <!-- Text -->
              <p class="card-text">
                Processeur core i5 <br>
                HDD 1Terra <br>
                Ram 8giga <br>
                Vitesse 2.50Ghz up to 4.7ghz <br>
                Prix revendeur 250 milles
              </p>
              <!-- Button -->
              <a href="#" class="btn btn-success">WhatsApp</a>
              
            </div>
          </div>
          <!-- card -->
        </div>


        <div class="col-lg-4 pb-5 wow fadeInDown slow">
          <!-- Card -->
          <div class="card ho">
            <!-- image -->
            <div class="view overlay">
              <img class="card-img-top" src="image/5.jpg" alt="card image cap">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Card content -->
            <div class="card-body">
              <!-- Title -->
              <h4 class="card-title">Hp pavillon</h4>
              <!-- Text -->
              <p class="card-text">
                Processeur core i5 <br>
                HDD 1Terra <br>
                Ram 8giga <br>
                Vitesse 2.50Ghz up to 4.7ghz <br>
                Prix revendeur 250 milles
              </p>
              <!-- Button -->
              <a href="#" class="btn btn-success">WhatsApp</a>
            </div>
          </div>
          <!-- card -->
        </div>


        <div class="col-lg-4 pb-5 wow fadeInRight slow">
          <!-- Card -->
          <div class="card ho">
            <!-- image -->
            <div class="view overlay">
              <img class="card-img-top" src="image/5.jpg" alt="card image cap">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Card content -->
            <div class="card-body">
              <!-- Title -->
              <h4 class="card-title">Hp pavillon</h4>
              <!-- Text -->
              <p class="card-text">
                Processeur core i5 <br>
                HDD 1Terra <br>
                Ram 8giga <br>
                Vitesse 2.50Ghz up to 4.7ghz <br>
                Prix revendeur 250 milles
              </p>
              <!-- Button -->
              <a href="#" class="btn btn-success">WhatsApp</a>
            </div>
          </div>
          <!-- card -->
        </div>
      </div>
    </div>
  </div>
  <!-- Project end -->

 <!-- Project start -->
  <div class="pt-5">
    <div class="container pt-5">
      <div class="row"> 
        <div class="col-lg-4 pb-5 wow fadeInLeft slow">
          <!-- Card -->
          <div class="card ho">
            <!-- image -->
            <div class="view overlay">
              <img class="card-img-top" src="image/5.jpg" alt="card image cap">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Card content -->
            <div class="card-body">
              <!-- Title -->
              <h4 class="card-title">Hp pavillon</h4>
              <!-- Text -->
              <p class="card-text">
                Processeur core i5 <br>
                HDD 1Terra <br>
                Ram 8giga <br>
                Vitesse 2.50Ghz up to 4.7ghz <br>
                Prix revendeur 250 milles
              </p>
    <!-- Button -->
              <a href="#" class="btn btn-success">WhatsApp</a>
            </div>
          </div>
          <!-- card -->
        </div>


        <div class="col-lg-4 pb-5 wow fadeInDown slow">
          <!-- Card -->
          <div class="card ho">
            <!-- image -->
            <div class="view overlay">
              <img class="card-img-top" src="image/5.jpg" alt="card image cap">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Card content -->
            <div class="card-body">
              <!-- Title -->
              <h4 class="card-title">Hp pavillon</h4>
              <!-- Text -->
              <p class="card-text">
                Processeur core i5 <br>
                HDD 1Terra <br>
                Ram 8giga <br>
                Vitesse 2.50Ghz up to 4.7ghz <br>
                Prix revendeur 250 milles
              </p>
            <!-- Button -->
              <a href="#" class="btn btn-success">WhatsApp</a>
            </div>
          </div>
          <!-- card -->
        </div>


        <div class="col-lg-4 pb-5 wow fadeInRight slow">
          <!-- Card -->
          <div class="card ho">
            <!-- image -->
            <div class="view overlay">
              <img class="card-img-top" src="image/5.jpg" alt="card image cap">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Card content -->
            <div class="card-body">
              <!-- Title -->
              <h4 class="card-title">Hp pavillon</h4>
              <!-- Text -->
              <p class="card-text">
                Processeur core i5 <br>
                HDD 1Terra <br>
                Ram 8giga <br>
                Vitesse 2.50Ghz up to 4.7ghz <br>
                Prix revendeur 250 milles
              </p>
            <!-- Button -->
              <a href="#" class="btn btn-success">WhatsApp</a>
            </div>
          </div>
          <!-- card -->
        </div>
      </div>
    </div>
  </div>
  <!-- Project end -->

  <!-- Project start -->
  <div class="pt-5">
    <div class="container pt-5">
      <div class="row"> 
        <div class="col-lg-4 pb-5 wow fadeInLeft slow">
          <!-- Card -->
          <div class="card ho">
            <!-- image -->
            <div class="view overlay">
              <img class="card-img-top" src="image/5.jpg" alt="card image cap">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Card content -->
            <div class="card-body">
              <!-- Title -->
              <h4 class="card-title">Hp pavillon</h4>
              <!-- Text -->
              <p class="card-text">
                Processeur core i5 <br>
                HDD 1Terra <br>
                Ram 8giga <br>
                Vitesse 2.50Ghz up to 4.7ghz <br>
                Prix revendeur 250 milles
              </p>
            <!-- Button -->
              <a href="#" class="btn btn-success">WhatsApp</a>
            </div>
          </div>
          <!-- card -->
        </div>


        <div class="col-lg-4 pb-5 wow fadeInDown slow">
          <!-- Card -->
          <div class="card ho">
            <!-- image -->
            <div class="view overlay">
              <img class="card-img-top" src="image/5.jpg" alt="card image cap">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Card content -->
            <div class="card-body">
              <!-- Title -->
              <h4 class="card-title">Hp pavillon</h4>
              <!-- Text -->
              <p class="card-text">
                Processeur core i5 <br>
                HDD 1Terra <br>
                Ram 8giga <br>
                Vitesse 2.50Ghz up to 4.7ghz <br>
                Prix revendeur 250 milles
              </p>
            <!-- Button -->
              <a href="#" class="btn btn-success">WhatsApp</a>
            </div>
          </div>
          <!-- card -->
        </div>


        <div class="col-lg-4 pb-5 wow fadeInRight slow">
          <!-- Card -->
          <div class="card ho">
            <!-- image -->
            <div class="view overlay">
              <img class="card-img-top" src="image/5.jpg" alt="card image cap">
              <a href="#">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>
            <!-- Card content -->
            <div class="card-body">
              <!-- Title -->
              <h4 class="card-title">Hp pavillon</h4>
              <!-- Text -->
              <p class="card-text">
                Processeur core i5 <br>
                HDD 1Terra <br>
                Ram 8giga <br>
                Vitesse 2.50Ghz up to 4.7ghz <br>
                Prix revendeur 250 milles
              </p>
            <!-- Button -->
              <a href="#" class="btn btn-success">WhatsApp</a>
            </div>
          </div>
          <!-- card -->
        </div>
      </div>
    </div>
  </div>
  <!-- Project end -->
  
<!-- Start the carousel -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.js"></script>

<script>
$('.carousel').carousel({
      interval: 500
});
</script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


<script>
  $(document).ready(function () {
    new WOW().init();
  });
</script>
</body>
<footer>
      <div class="wrapper">
        <h1>Mon entreprise</h1>
        <div class="Copyright">&copy; 2023 Mon entreprise</div>
      

      <div align="center">
       <a href="https://www.facebook.com/profile.php?id=100092839172203"><img src="image/facebook.png" height="50" width="50"></a> 
      <a href=""><img src="image/insta.png" height="50" width="49"></a>  
      <a href=""><img src="image/whats.png" height="50" width="49"></a>  
      </div>
        </div>
  </footer>
</html>




