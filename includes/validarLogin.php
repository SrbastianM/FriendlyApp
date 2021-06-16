<?php 

if(isset($_POST["email"]) and isset($_POST["password"])){
    echo $_POST["email"];
    echo $_POST["password"];
$user = $_POST["email"];
$contraseña = $_POST["password"];

    $sql = "SELECT * FROM dbfriendlyapp WHERE email ='$user' AND password = '$contraseña'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    //se para en row y pide que imprima de la primera fila de cada campo
    header("location:UI.php");
    } else {
        echo 'I dont Found U';
    }

    mysqli_close($conn);
}



// $User el user que se 
?>