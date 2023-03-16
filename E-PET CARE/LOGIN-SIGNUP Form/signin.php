<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "codeflix";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$email = $_POST["email"];
$password = $_POST["password"];
// $salt = "codeflix";
// $password_encrypted = sha1($password.$salt);


$sql = mysqli_query($conn, "SELECT count(*) as total from signup WHERE email = '".$email."' and 
	password = '".$password."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){
	?>
	<script>
		alert('Login successful');
	</script>
	<meta http-equiv = "refresh" content = "0; url = http://localhost/shubham/e-pet%20care/" />
	<?php
}
else{
	echo "error " . $sql . " " . $conn->error;
	?>
	<script>
		alert('Login failed');
	</script>
	<?php
}








?>