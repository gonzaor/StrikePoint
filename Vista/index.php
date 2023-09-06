<?php
session_start();

if (isset($_SESSION['nombreLogeado'])) {
    $nombree = $_SESSION['nombreLogeado'];

}
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Styles -->
    <link rel="stylesheet" href="style.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />
    <link rel="shortcut icon" href="images/pestaña.png">
  </head>

  <body>

    <!-- Navigation -->
    <div class="navigation">
      <div class="navigation-left">
 
<nav class="navbar navbar-expand-lg">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Tarifas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Reservas</a>
    </li>
    <li class="nav-item dropdown show">
      <a class="btn btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">Nosotros</a>
      <style>
        .navigation-left a {
    text-decoration: none;
    text-transform: uppercase;
    color: #333745;
    font-size: 12px;
    font-weight: bold;
    width: 110px;
    height: 39px;
    border: 2px solid rgb(0 123 255);
    border-radius: 15px;
    display: inline-block;
    text-align: center;
    line-height: 21px;
    transition: all .2s;
}
      .dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 12rem;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    font-size: 1rem;
    color: #919191;
    text-align: left;
    list-style: none;
    background-color: transparent;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 0.25rem;
}
.btn.focus, .btn:focus {
    outline: 0;
    box-shadow: 0 0 0 0.0rem rgba(0,123,255,.25);
}
.navigation-left a:hover, .navigation-left a:focus {
    border-color: transparent;
    background-color: rgba(44, 45, 47, 0);
}
</style>

      <div  class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a style="border: 2px solid transparent;" class="dropdown-item" href="misionvision.html">Nuestra historia</a>
        <a style="border: 2px solid transparent;" class="dropdown-item" href="Loginadmin.php">Ingreso Institucional</a>
        
      </div>
    </li>
  </ul>
</nav>

      </div>
      <div class="navigation-center">
        <span class="logo"><img src="images/logo.png" alt="" width="100" height="100"></span>
      </div>
      <div class="navigation-right">
    
       <?php
       if (!isset($_SESSION['nombreLogeado'])) {
           echo "<a href='#'><img src='images/shopping-bag.png' alt=''></a>";
           echo "<a href='indexLogin.php'><button class='login-btn'>Login</button></a>";
       } else {
           echo "<div class='dropdown'>";
           echo "<button id='userDropdown' class='dropbtn'>$_SESSION[nombreLogeado]</button>";
           echo "<div id='myDropdown' class='dropdown-content'>";
           echo "<a href='../Vista/cerrarSession.php'>Cerrar Sesión</a>";
           echo "</div>";
           echo "</div>";
       }
       ?>
      </div>
    </div>

    <!-- Slider Wrapper -->
    <div class="css-slider-wrapper">
      <input type="radio" name="slider" class="slide-radio1" checked id="slider_1">
      <input type="radio" name="slider" class="slide-radio2" id="slider_2">
      <input type="radio" name="slider" class="slide-radio3" id="slider_3">
      <input type="radio" name="slider" class="slide-radio4" id="slider_4">

      <!-- Slider Pagination -->
      <div class="slider-pagination">
        <label for="slider_1" class="page1"></label>
        <label for="slider_2" class="page2"></label>
        <label for="slider_3" class="page3"></label>
        <label for="slider_4" class="page4"></label>
      </div>

      <!-- Slider #1 -->
      <div class="slider slide-1">
        <img src="images/model-1.png" alt="">
        <div class="slider-content">
          <h4>Reservá ya!</h4>
          <h2>Reservá tu cancha de fútbol</h2>
          <button type="button" class="buy-now-btn" name="button">Click aquí</button>
        </div>
        <div class="number-pagination">
          <span>1</span>
        </div>
      </div>

      <!-- Slider #2 -->
      <div class="slider slide-2">
        <img src="images/model-2.png" alt="">
        <div class="slider-content">
          <h4>Reservá ya!</h4>
          <h2>Reservá tu cancha de padel</h2>
          <button type="button" class="buy-now-btn1" name="button">Click aquí</button>
        </div>
        <div class="number-pagination">
          <span>2</span>
        </div>
      </div>

      <!-- Slider #3 -->
      <div class="slider slide-3">
        <img src="images/model-3.png" alt="">
        <div class="slider-content">
          <h4>Reservá ya!</h4>
          <h2>Reservá tu salon para eventos</h2>
          <button type="button" class="buy-now-btn2" name="button">Click aquí</button>
        </div>
        <div class="number-pagination">
          <span>3</span>
        </div>
      </div>

      <!-- Slider #4 -->
      <div class="slider slide-4">
        <img src="images/logo.png" alt="">
        <div class="slider-content">
          <h4>Reservá ya!</h4>
          <h2>Actividades deportivas próximas</h2>
          <button type="button" class="buy-now-btn3" name="button">Click aquí</button>
        </div>
        <div class="number-pagination">
          <span>4</span>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script> <script src="app.js" charset="utf-8"></script>
  </body>

</html>
