<?php
	if (isset($_COOKIE["sid"]))
		session_id($_COOKIE["sid"]);
	session_start();
?>

<html>
<body>

<?php
$servername = "localhost";
$username = "admin";
$password = "pass";
$base = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $base);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

$sql = "INSERT INTO user(email, login, password_hash, name, surname) 
	VALUES ('".$_POST["email"]."', '".$_POST["user"]."', '".$_POST["pwd"]."', '".$_POST["fname"]."', '".$_POST["lname"]."');";

if(mysqli_query($conn, $sql) == TRUE)
	echo "Użytkownik dodany<br><br>";
else
	echo mysqli_error($conn);

$conn->close();

sleep(2);

ob_start(); 
$url = 'main.php'; 
while (ob_get_status()) {
    ob_end_clean();
}
header( "Location: $url" );
?>



</body>
</html>