
<?php 
include("includes/db.php");

// Aquí, va a validar un usuario y lo incriptara
$name = $_POST["name"];
$phone = $_POST["phone"];
$card = $_POST["citizenshipcard"];
$email = $_POST["email"];
$password = $_POST["password"];

$query = "INSERT INTO dbfriendlyapp (name, phone, citizenshipcard, email, password) VALUES ('$name','$phone','$citizenshipcard','$email', '$password')";
$result = mysqli($conn, $result);



?>