<?php 

//session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'dbfriendlyapp'
);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

// **IMPORTANTE**
    //CADDY SSD y EL DISCO DE ESTADO SOLIDO + 2 GB (dr3 1.333mhz)DE MEMORIA RAM
// if(isset($conn)){
//     echo "its Connected";
// }
?>