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
          $nick = ($_POST['nickname']);

          //validacion de la consulta Literalmente esta pidiendo qeu no tenga campos vacios
          if (empty($name)) {
               die("<a href = '../UIregister.php'><p> Enter a valid Name</p></a>");
          };
          if (empty($phone)) {
               die("<a href = '../UIregister.php'><p> Enter a valid Phone</p></a>");
          };
          if (empty($card)) {
               die("<a href = '../UIregister.php'><p> Enter a valid Card</p></a>");
          };
          if (empty($email)) {
               die("<a href = '../UIregister.php'><p> Enter a valid email</p></a>");
          } else {
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    die("<a href = '../UIregister.php'><p> Enter a valid Email</p></a>");
               };
          }
          if (empty($password)) {
               die("<a href = '../UIregister.php'><p> Enter a valid Password</p></a>");
          };
          if ($validacion = true) {
               $registerUser = true;
          }
          //     // Insertar dentro de las columnas, la informacion que llegue respectiva a sus variables
          if ($registerUser = True) {
               $query = "INSERT INTO `tbl_users`(`name`, `phone`, `citizenshipcard`, `email`, `password`, `nickname`)
          VALUES ('$name','$phone','$card','$email','$password', '$nick')";
               //     //Consulta 
               $result = mysqli_query($conn, $query);
               if ($query = true) {
                    echo "User Saved";
               }
               if (!$result) {
                    die('Holly molly thts sounds bad');
               }
          }
     } else {
          $validacion = false;
     }
}

mysqli_close($conn);
