<?php
    if(isset($_GET["id"]))
    {
        $servername = "localhost";
        $database = "prueba";
        $username = "root";
        $password = "";

        $status = "no activo"; 
        $table = "empleado";
        $data = $_GET['id'];
        
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        if($conn) {
            
            $sql = "UPDATE " . $table . " SET " . "status = '$status'" . "WHERE id = " . "$data";

            $result = mysqli_query($conn, $sql);
        }

        mysqli_close($conn);

        header('Location: index.php');
    }
?>