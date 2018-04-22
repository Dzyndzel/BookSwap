<?php
  if (isset($_COOKIE["sid"]))
    session_id($_COOKIE["sid"]);
  session_start();
  if (!isset($_SESSION["uid"])){
    ob_start(); 
    $url = 'login.php'; 
    while (ob_get_status()) {
        ob_end_clean();
    }
    header( "Location: $url" );
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dodawanie książki</title>
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
  <form name="register" method="post" action = "add_book.php" autocomplete="on" class="form-horizontal">

    <div class="form-group">
      <label class="control-label col-sm-4" for="title">Tytuł:</label>
      <div class="col-sm-4">
        <input type="txt" class="form-control" id="title" placeholder="Enter title" name="title">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="author">Autor:</label>
      <div class="col-sm-4">          
        <input type="txt" class="form-control" id="author" placeholder="Enter Author" name="author">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="isbn">ISBN:</label>
      <div class="col-sm-4">          
        <input type="txt" class="form-control" id="isbn" placeholder="ISBN" name="isbn">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="decription">Opis:</label>
      <div class="col-sm-4">          
        <textarea  rows = "4" cols = "36" maxlength="200" class="form-control" id="description" placeholder="Description" name="description"></textarea>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-10">
        <button type="submit" class="btn btn-default">Dodaj</button>
      </div>
    </div>
  </form>
</div>

<!--Footer-->
<footer class="page-footer font-small stylish-color-dark pt-4 mt-4">
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
<!--/.Footer-->
</body>
</html>