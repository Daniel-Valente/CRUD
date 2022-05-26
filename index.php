<?php
    include("conection.php");
?>

<!DOCTYPE html>
<html  lang="es">
    <head>
    <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">

        <title>CRUD</title>
        
        <link rel="stylesheet" href="css/reset.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <header>
            
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <br>
                        <section>
                            <form action="insert.php" method="POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nombre del empleado</span>
                                <input type="text" class="form-control" placeholder="Nombre del empleado" aria-label="Username" aria-describedby="basic-addon1" id="name" name="name">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Guardar empleado</button>
                            </form>
                        </section>
                        <br>
                        <section>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NOMBRE</th>
                                        <th>ESTATUS</th>
                                        <th>ELIMINAR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $servername = "localhost";
                                        $database = "prueba";
                                        $username = "root";
                                        $password = "";
                                        
                                        $conn = mysqli_connect($servername, $username, $password, $database);
                                        $sql = "SELECT * FROM " . "empleado";

                                        $result = mysqli_query($conn, $sql);
                                        
                                        while($data = mysqli_fetch_assoc($result)) {
                                            if($data['status'] == "activo") {
                                    ?>
                                    <tr>
                                        <td><?php echo $data['id'] ?></td>
                                        <td><?php echo $data['name'] ?></td>
                                        <td><?php echo $data['status'] ?></td>
                                        <td> <a type="button" class="btn btn-danger" href="delete.php?id=<?php echo $data['id']; ?>">X</a> </td>
                                    </tr>       
                                    <?php   }}
                                    ?>
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
            </div>
        </main>
        <footer></footer>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>