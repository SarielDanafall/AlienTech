  <!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <link rel="icon" type="image/png" href="media/img/icon-web.png">
    <meta charset="utf-8">
    <meta name="author" content="ZGTT911">
    <meta name="author" content="¥$ariel¥">
    <title>Alien Technology</title>
  </head>

  <body>
    <nav class="nav">
      <span class="logo">
        <a class="navbar-brand" href="/">
          <img src="media/img/icon-web.png" width="30" height="30" class="d-inline-block align-top" alt="">
          Alien Technology
        </a>
      </span>
      <a class="nav-link active" href="/">home</a>
      <a class="nav-link" href="hashform.html">Hash test</a>
      <a class="nav-link" href="#">Link</a>
      <a class="nav-link" href="#">Link</a>
      <form class="search form-inline my-2 my-lg-0" method="GET" action="index.php">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-success my-2 my-sm-0 ser" type="submit">	&#x1F50E; Search</button>
      </form>
      <div class="flushr">
        <?php
          $user = "User test";

          if ($user == "") {
            echo "<span class=\"log-link\"><a href=\"#\">Register</a> &#124; <a href=\"login.html\">Login</a></span>";
          } else {
            echo "<abbr title=\"$user\"><img id=\"user\" src=\"media/img/user.png\" width=\"32px\"></abbr>";
          }
        ?>
      </div>
    </nav>
    <h1>Alien Technology</h1>
    <h2 id="banner">Destacado &#11088;</h2>
    <center>
      <?php
      include 'php/conn.php';

      for ($i=0; $i < 5; $i++) { 
        echo "<div id=\"preview\">";
        echo "<a href=\"#\" class=\"link\">";
        echo "<h3>Title</h3>";
        echo "<p>Author &#124; Hace 1 hora.</p> <br>";
        echo "<img src=\"media/img/icon-web.png\">";
        echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>";
        echo "</a>";
        echo "</div>";
      }
      ?>
    </center>
    <h2 id="banner">Nuevo &#127381;</h2>
    <center><?php
    include 'php/conn.php';

      for ($i=0; $i < 5; $i++) { 
        echo "<div id=\"preview\">";
        echo "<a href=\"#\" class=\"link\">";
        echo "<h3>Title</h3>";
        echo "<p>Author &#124; Hace 1 hora.</p> <br>";
        echo "<img src=\"media/img/icon-web.png\">";
        echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>";
        echo "</a>";
        echo "</div>";
      }
      ?></center>
    <h2 id="banner">Mas leido &#128083;</h2>
    <center>
    <?php
    include 'php/conn.php';

      for ($i=0; $i < 5; $i++) { 
        echo "<div id=\"preview\">";
        echo "<a href=\"#\" class=\"link\">";
        echo "<h3>Title</h3>";
        echo "<p>Author &#124; Hace 1 hora.</p> <br>";
        echo "<img src=\"media/img/icon-web.png\">";
        echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>";
        echo "</a>";
        echo "</div>";
      }
      ?>
      </center>
  </body>
</html>
