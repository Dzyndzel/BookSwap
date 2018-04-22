<!DOCTYPE html>
<html lang="en">
<head>
  <title>TheSwap</title>
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
    <div class="col-md-10">
   <a href="">Użytkownik</a>
    </div>
  </div>

<div class="container">
  <div class="row">
    <div class="col-sm-6">
  <div class="media">
    <div class="media-left">
      <img src="otwarta_ksiazka.jpg" class="media-object" style="width:202px" style="width:470px">
    </div>
    <div class="media-body">
      <h4 class="media-heading">Tytuł Ksiązki</h4>
      <p>Autor</p>
	<h6>Opis</h6>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>	
    	</div>  </div> </div> 
    <div class="col-sm-6">
      <label for="myBooks">Moje Ksiązki:</label>
      <select class="form-control" id="myBooks">
        <option>K1</option>
        <option>K2</option>
        <option>K3</option>
        <option>K4</option>
      </select>
      <a href="zaproponuj_zamiane _propozycja.php" role="button" class="btn btn-success">Dodaj Propozycję</a>
</div>
</div>
</div>
<div class="container text-center text-md-left">
    <div class="col-md-10">
  <button type="button" class="btn btn-success">Zaproponuj Wymiane</button>
    </div>
  </div>

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
<!--/.Footer-->
</body>
</html>