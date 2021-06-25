<?php 
require'db.php';

// Aquí, va a almacenar en sus respectivas variables, los campos con sus respectivos nombres
if(isset($_POST['name'], $_POST['phone'], $_POST['citizenshipcard'], $_POST['email'], $_POST['password'])){
     $name = $_POST['name'];
     $phone = $_POST['phone'];
     $card = $_POST['citizenshipcard'];
     $email = $_POST['email'];
     $password = md5($_POST['password']); 
//     // Insertar dentro de las columnas, la informacion que llegue respectiva a sus variables
    $query = "INSERT INTO `tbl_users`(`name`, `phone`, `citizenshipcard`, `email`, `password`)
     VALUES ('$name','$phone','$card','$email','$password')";
//     //Consulta 
     $result = mysqli_query($conn, $query);
//     //validacion de la consulta
     if(!$result){
         die('Holly molly thts sounds bad');
     } 
     echo 'User saved';
}

    
mysqli_close($conn);

?>