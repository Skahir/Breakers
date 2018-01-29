<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Nando Reij">

    <title>Ball Breakers</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="Resources/bootstrap/css/bootstrap.min.css">
  
  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <!-- thether -->
  <script src="Resources/tether/dist/js/tether.min.js"></script>
  <link rel="stylesheet" href="Resources/tether/dist/css/tether.min.css">

  <!-- jquery -->
  <script src="Resources/jquery/jquery.min.js"></script>
  <script src="Resources/bootstrap/js/bootstrap.min.js"></script>

  <!-- background -->
  <canvas width="3" height="3"></canvas>
  <script src="background.js"></script>

  <?php 
    session_start(); 
  ?>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#" img=""><?php if(isset($_SESSION["username"])){echo htmlspecialchars($_SESSION["username"], ENT_QUOTES, 'UTF-8');} ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="menu.php">Menu
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
              <a class="nav-link" href="logout.php">logout</a>
           
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <center><h1 class="display-1 white">Ball Breakers</h1></center>

      <div class="row justify-content-center">      
      
        <div class="col-4">

          <div class="frm">
            <!-- button to dodge game -->
            <a class="btn btn-info" href="dodge.html">dodge game</a>
            <!-- button to pong game -->
            <a class="btn btn-success" href="breaker.html">pong game</a>


          <!-- end of frame -->
          </div>
      <!-- end of center col-4 -->
      </div>
    <!-- end of container -->
    </div>

  </body>

</html>