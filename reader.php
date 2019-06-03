<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <link rel="icon" type="image/png" href="media/img/icon-web.png">
    <meta charset="utf-8">
    <meta name="author" content="ZGTT911">
    <meta name="author" content="¥$ariel¥">
    <?php
    include 'php/conn.php';

    # get method id
    $id = $_GET('token');

    # sql single query
    $sql = "SELECT * FROM products WHERE id = $id";
    $sth = $conn->query($sql);
    $result=mysqli_fetch_array($sth);

    echo "<title>$result['title'] - Alien Reader</title>";    

    $conn.close();
     ?>
    
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
      <form class="search form-inline my-2 my-lg-0" method="GET" action="search.php">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-success my-2 my-sm-0 ser" type="submit">	&#x1F50E; Search</button>
      </form>
      <div class="flushr">
        <?php
          include 'php/conn.php';
          $id_user = $_POST('id');

          $triger = false;
          while(($row = $result->fetch_assoc()) && (!$triger))
          {
            if ((row["nick"] == $user) && passCheck($passwd, row["passwd"]))
            {
              $triger = true;
              echo "<abbr title=\"$row['nick']\"><img id=\"user\" src=\"data:image/jpeg;base64,'.base64_encode( $row['img'] ).'\" width=\"32px\"></abbr>";
            }
          }

          if ($triger)
          {
            echo "<span class=\"log-link\"><a href=\"#\">Register</a> &#124; <a href=\"login.html\">Login</a></span>";
          }
        $conn.close();
        ?>
      </div>
    </nav>
    <br>
    <?php 
    include 'php/conn.php';
    include 'php/Parsedown.php';

    # get method id
    $id = $_GET('token');

    # parsedown class
    $Parsedown = new Parsedown();

    # sql single query
    $sql = "SELECT * FROM products WHERE id = $id";
    $sth = $conn->query($sql);
    $result=mysqli_fetch_array($sth);

    echo $Parsedown->text($result['body']);

    $conn.close();
     ?>
  </body>
</html>
