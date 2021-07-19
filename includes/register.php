<?php
require 'db.php';

/* isset($_POST['name'], $_POST['phone'], $_POST['citizenshipcard'], $_POST['email'], $_POST['password'])*/
//Aquí, va a almacenar en sus respectivas variables, los campos con sus respectivos nombres
$registerUser = "";
$validacion = "";

if ($validacion = true) {

     if (isset($_POST["register"])) {
          $name = $_POST['name'];
          $phone = $_POST['phone'];
          $card = $_POST['citizenshipcard'];
          $email = $_POST['email'];
          $password = md5($_POST['password']);
          //validacion de la consulta Literalmente esta pidiendo qeu no tenga campos vacios
          if (empty($name)) {
               die("<p> Enter a valid Name</p>");
          };
          if (empty($phone)) {
               die("<p> Enter a valid Phone</p>");
          };
          if (empty($card)) {
               die("<p> Enter a valid Citizenshipcard</p>");
          };
          if (empty($email)) {
               die("<p> Enter a valid Email</p>");
          } else {
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    die("<p> The Email is Ivalid</p>");
               };
          }
          if (empty($password)) {
               die("<p> Enter a valid Password</p>");
          };
     } else {
          $validacion = false;
     }


     //     // Insertar dentro de las columnas, la informacion que llegue respectiva a sus variables
     if ($registerUser = True) {
          $query = "INSERT INTO `tbl_users`(`name`, `phone`, `citizenshipcard`, `email`, `password`)
          VALUES ('$name','$phone','$card','$email','$password')";
          //     //Consulta 
          $result = mysqli_query($conn, $query);
          if (!$result) {
               die('Holly molly thts sounds bad');
          }
     }
}


mysqli_close($conn);
