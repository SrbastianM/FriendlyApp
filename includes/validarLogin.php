<?php
include('db.php');

session_start();

$time = "";
$UserLogin = "";
if ($UserLogin = True) {

    if (isset($_POST["submitLogin"])) {
        $user = $_POST["email"];
        $contraseña = md5($_POST["password"]);
        $sql = "SELECT * FROM tbl_users WHERE email ='$user' AND password = '$contraseña'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION["id_usuario"] = $row["id"];

            $_SESSION['nombre'] = $row['name'];
            $_SESSION['nick'] = $row['nickname'];
            $_SESSION['description'] = $row['description'];
            //se para en row y pide que imprima de la primera fila de cada campo
            header("location:../View/UI.php");
        } else {
            header("Location:../login.php");
            echo "Usuario y/o contraseña no validos";
        }

        mysqli_close($conn);
    }
}
