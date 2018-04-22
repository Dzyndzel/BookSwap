<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="main.php">BookSwap</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="przegladaj_ksiazke.php">Przeglądaj książki</a></li>
      <li><a href="#">Moje katalogii</a></li>
      <li><a href="#">Dodaj książkę</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Zaloguj się</a></li>
      <li><a href="rejestracja.php"><span class="glyphicon glyphicon-user"></span> Zarejestruj się</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <form  method="post" class="form-horizontal" action="#">
    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Email:</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Password:</label>
      <div class="col-sm-4">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        <p id="err" style="color: red; margin-bottom: -10px; font-weight: bold"></p>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-4">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-10">
        <button style="margin-top: -10px" type="submit" class="btn btn-default">Zaloguj</button>
      </div>
    </div>
  </form>
</div>

<?php
  $conn = new mysqli("localhost", "admin", "pass", "mydb");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  } 

  if (!empty($_POST["email"])) {
    $sql = "SELECT Id, name, password_hash FROM user WHERE email = '".$_POST["email"]."'";
      if($conn->query($sql)) {
        if($_POST["pwd"] == $conn->query($sql)->fetch_row()[2]){
        $_SESSION["uid"] = $conn->query($sql)->fetch_row()[0];
        $_SESSION["login"] = $conn->query($sql)->fetch_row()[1];
        setcookie("sid", session_id(), time() + (86400 * 30), "/");
        ob_start(); 
        $url = 'main.php'; 
        while (ob_get_status()) {
          ob_end_clean();
        }
        header( "Location: $url" );
        }
        else{
        echo '<script>document.getElementById("err").innerHTML = "Błędny login lub hasło";</script>';
        }
    }
  }
?>

<!--Footer-->
<hr class="clearfix w-100 d-md-none">
    <div class="container text-center text-md-left">
        <div class="row">           
                <p><a href="polityka_prywatnosci.php">Polityka prywatności</a>
                    <a href="kontakt.php">Kontakt</a>
		    <a href="o_nas.php">O nas</a></p>
            </div>
        </div>		   
    </div>

</footer>
</body>
</html>