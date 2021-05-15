<?php
    include("connection.php");
    error_reporting(0);
    session_start();

    if(!$_SESSION['auth']) {
      header('location:quis2.php');
    }
    else {
      $currentTime = time();
      if($currentTime > $_SESSION['expire']) {
        session_unset();
        session_destroy();
        header('location:quis2.php');
      }
      else {echo($_SESSION)
  ?>
    
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
      <title>Home Page</title>
    </head>
    <body>
      <div class="row no-gutters d-flex justify-content-end pr-3">
        <a href="logout.php" class="logout">
          <input type="submit" name="login" class="btn btn-secondary mt-3"  
           value="Log Out">
     </a>
      </div>
      <h1 class="text-center">Welcome to the Home Page</h1> 
    </body>
    <?php
        }
      }
    ?>
  </html>