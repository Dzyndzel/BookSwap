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

$sql = "INSERT INTO book(author, title, description, user_id, isbn) 
	VALUES ('".$_POST["author"]."', '".$_POST["title"]."', '".$_POST["description"]."', '".$_SESSION["uid"]."', '".$_POST["isbn"]."');";

if(mysqli_query($conn, $sql) == TRUE)
	echo "Książka dodana<br><br>";
else
	echo mysqli_error($conn);

$conn->close();

?>



</body>
</html>