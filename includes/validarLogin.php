<?php 

if(isset($_POST["Usuario"]) and isset($_POST["Contraseña"])){
    echo $_POST["Usuario"];
    echo $_POST["Contraseña"];
$user = $_POST["Usuario"];
$contraseña = $_POST["Contraseña"];

    $sql = "SELECT * FROM tblusuario WHERE Usuario ='".$user."' AND Contrasena = '$contraseña'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    //se para en row y pide que imprima de la primera fila de cada campo
    header("location:index.php");
    } 

    mysqli_close($conn);
}



// $User el user que se 
?>