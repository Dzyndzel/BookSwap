<?php
	session_start();
?>

<html>
<body>

<?php 
session_destroy(); 
?>

<script>
	window.location.href = 'main.php';
</script>

</body>
</html>