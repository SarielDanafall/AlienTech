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
      <form class="search form-inline my-2 my-lg-0" method="GET" action="index.php">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-success my-2 my-sm-0 ser" type="submit">	&#x1F50E; Search</button>
      </form>
      <div class="flushr">
        <?php
          $user = "User test";

          if ($user != "") {
            echo "<span class=\"log-link\"><a href=\"#\">Register</a> &#124; <a href=\"#\">Login</a></span>";
          } else {
            echo "<abbr title=\"$user\"><img id=\"user\" src=\"media/img/user.png\" width=\"32px\"></abbr>";
          }
        ?>
      </div>
    </nav>
    <h1>Alien Technology, Password HASH System (PHS)</h1>
    <h2>Using MD5</h2>
    <p>
      <?php
      $passwd = $_GET['pass'];
      $hashed_pass = md5($passwd);

      echo "The password is: ", $passwd, "<br>The hash of the password is: ", $hashed_pass;
      ?>
    </p>
  </body>
</html>
