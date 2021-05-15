  <!DOCTYPE html>
  <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <title>Log in</title>
    </head>
    <body>
      <div class="wrapper mx-auto mt-5">
        <h2 class="text-center mb-4">LOG IN</h2>
        <form method="POST" action="">
          <div class="row">
            <div class="col-12 mt-3">
              <input type="text" class="form-control" placeholder="User Name"               
               name="username" required>
            </div>
            <div class="col-12 mt-3">
              <input type="password" class="form-control" placeholder="Password" 
              name="password" required>
            </div>
          </div>
          <input type="submit" name="login" class="btn btn-secondary mt-4 w-100 
           login-btn" value="Log In" >
        </form>
      </div>
    </body>
  </html>
  <?php  
    include("connection.php");
    error_reporting(0);

    if($_POST['login']) {
      $un=$_POST['username'];
      $pass=$_POST['password'];
      
      $query = "SELECT * FROM user WHERE user_name='$un' AND password='$pass'"; 
      $data = mysqli_query($conn,$query);
      $total = mysqli_num_rows($data);
      if($total != 0) {
        session_start();
        $_SESSION['auth'] = true;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (30*60);
        header('location:homePage.php');
        echo "run";
      } else {
?>
    <!-- <script>
            alert("user name or password is invalid");
        </script> -->
        <?php
      }
    }
   