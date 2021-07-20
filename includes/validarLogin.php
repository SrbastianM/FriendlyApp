<?php
include('db.php');

session_start();

$time = "";

if (isset($_POST["submitLogin"])) {
    $user = $_POST["email"];
    $contraseña = md5($_POST["password"]);

    $sql = "SELECT * FROM tbl_users WHERE email ='$user' AND password = '$contraseña'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        //se para en row y pide que imprima de la primera fila de cada campo
        header("location:../View/UI.php");
    } else {
        header("Location:../login.php");
    }

    mysqli_close($conn);
}



// $User el user que se 
