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
          include 'php/conn.php';
          $id_user = $_GET('id');


          $sql = "SELECT * FROM user Where auth_key = '$id_user'";
          $sth = $conn->query($sql);
          $row = mysqli_fetch_array($sth);



          if ($row['auth_key'] != "")
          {
            echo "<abbr title=\"$row['nick']\"><img id=\"user\" src=\"data:image/jpeg;base64,'.base64_encode( $row'img'] ).'\" width=\"32px\"></abbr>";
          }
          else
          {
            echo "<span class=\"log-link\"><a href=\"#\">Register</a> &#124; <a href=\"login.html\">Login</a></span>";
          }
        $conn.close();
        ?>
      </div>
    </nav>
    <h1>Alien Technology</h1>
    <h2 id="banner">Destacado &#11088;</h2>
    <center>
      <?php
      include 'php/conn.php';

      $sql = "SELECT * FROM blog ORDER BY likes LIMIT 5";

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {

          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<div id=\"preview\">";
              echo "<a href=\"#\" class=\"link\">";
              echo "<h3>$row['title']</h3>";
              echo "<p>$row['author'] &#124; Hace χ hora.</p> <br>";
              echo "<img src=\"media/img/icon-web.png\">";
              echo "<p>$row['descripcion']</p>";
              echo "</a>";
              echo "</div>";
          }
      } else {
          echo "<h2>0 results</h2>";
      }
      ?>
    </center>
    <h2 id="banner">Nuevo &#127381;</h2>
    <center><?php
    include 'php/conn.php';

      $sql = "SELECT * FROM blog ORDER BY creation_date LIMIT 5";

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {

          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<div id=\"preview\">";
              echo "<a href=\"#\" class=\"link\">";
              echo "<h3>$row['title']</h3>";
              echo "<p>$row['author'] &#124; Hace χ hora.</p> <br>";
              echo "<img src=\"media/img/icon-web.png\">";
              echo "<p>$row['descripcion']</p>";
              echo "</a>";
              echo "</div>";
          }
      } else {
          echo "<h2>0 results</h2>";
      }
      ?></center>
    <h2 id="banner">Mas leido &#128083;</h2>
    <center>
    <?php
    include 'php/conn.php';

      $sql = "SELECT * FROM blog ORDER BY views LIMIT 5";

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {

          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<div id=\"preview\">";
              echo "<a href=\"#\" class=\"link\">";
              echo "<h3>$row['title']</h3>";
              echo "<p>$row['author'] &#124; Hace χ hora.</p> <br>";
              echo "<img src=\"media/img/icon-web.png\">";
              echo "<p>$row['descripcion']</p>";
              echo "</a>";
              echo "</div>";
          }
      } else {
          echo "<h2>0 results</h2>";
      }
      ?>
      </center>
  </body>
</html>
