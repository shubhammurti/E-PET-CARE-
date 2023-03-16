<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "codeflix";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
// $salt = "codeflix";
// $password_encrypted = sha1($password.$salt);


$sql = "INSERT INTO signup (name, email, password) 
VALUES ('$name', '$email', '$password')";

try{
if($conn->query($sql) === TRUE)
{
     ?>
	<script>
		alert('Successfully Signup');
	</script>
	

     <meta http-equiv = "refresh" content = "0; url = http://localhost/shubham/e-pet%20care/LOGIN-SIGNUP%20Form/signlog.html" />

	<?php
}
else{
	echo "error " . $sql . " " . $conn->error;
	?>
	<script>
		alert('Values did not insert');
	</script>
	<?php
}
} catch(Exception $e) {
	alert ('Message: ' ,$e->getMessage());
  }

?>




















