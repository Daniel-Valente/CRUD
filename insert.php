<?php
    $servername = "localhost";
    $database = "prueba";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    $name = $_REQUEST["name"];
    $status = "activo";

    $sql = "INSERT INTO empleado (name, status) VALUES ('$name', '$status')";
    if (!mysqli_query($conn, $sql)) {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    header('Location: index.php');
?>