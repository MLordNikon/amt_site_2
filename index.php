<?php

include("conn.php");
$query = $conn->query("SELECT * FROM `aprendices`");

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container mt-5">
            <a name="" id="" class="btn btn-primary mb-4" href="formulario_nuevo.php" role="button">Nuevo</a>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Tipo</th>
                            <th scope="col">Numero</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Programa</th>
                            <th scope="col">Ficha</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($aprendices = $query->fetch_object()) { ?>
                            <tr>
                                <td><?= $aprendices->tipo ?></td>
                                <td><?= $aprendices->numero ?></td>
                                <td><?= $aprendices->nombres ?></td>
                                <td><?= $aprendices->apellidos ?></td>
                                <td><?= $aprendices->programa ?></td>
                                <td><?= $aprendices->ficha ?></td>
                                <td><?= $aprendices->correo ?></td>
                                <td><?= $aprendices->celular ?></td>
                                <td>
                                    <a name="" id="" class="btn btn-warning" href="formulario_editar.php?numero=<?= $aprendices->numero ?>" role="button">Editar</a>
                                    <a name="" id="" class="btn btn-danger" href="eliminar.php?numero=<?= $aprendices->numero ?>" role="button">Eliminar</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>