<?php 
include("includes/db.php");

// Aquí, va a almacenar en sus respectivas variables, los campos con sus respectivos nombres
if(isset($_POST['register'])){
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $card = $_POST['citizenshipcard'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Insertar dentro de las columnas, la informacion que llegue respectiva a sus variables
    $query = "INSERT INTO dbfriendlyapp(name, phone, citizenshipcard, email, password) VALUES ('$name','$phone','$citizenshipcard','$email', '$password')";
    //Consulta 
    $result = mysqli_query($conn, $query);
    //validacion de la consulta
    if(!$result){
        die('Holly molly thts sounds bad');
    } 
    echo 'User saved';

}
// // $name = $_POST["name"];
// $phone = $_POST["phone"];
// $card = $_POST["citizenshipcard"];
// $email = $_POST["email"];
// $password = $_POST["password"];
// Va a enviar a la db, los campos anteriormente almacenados 
//Consula

mysqli_close($conn);

?>