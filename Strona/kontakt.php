<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact</title>
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
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="main.php" [routerLink]="['/']">Strona główna</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Kontakt</li>
    </ol>
  </nav>
  <div class="page-header">
    <h2 class="text-center">Kontakt</h2>
  </div>

 <div class="row">
    <div class="col-md-6">
      <form class="form-horizontal">
        <div class="form-group">
          <label class="control-label col-md-2" for="subject">Temat: </label>
          <div class="col-md-4">
            <input type="text" class="form-control" id="title">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-2" for="emil">Twój Email</label>
          <div class="col-md-4">
            <input type="text" class="form-control" id="categoryName">
          </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-2" for="content">Treść: </label>
            <div class="col-md-10">
              <textarea class="form-control" id="content" rows="20">Treść</textarea>
            </div>
          </div>
	<div class="col-sm-offset-10 col-sm-3">
        <button type="button" class="btn btn-default" id="send">Wyślij</button>
      </form>
    </div>
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