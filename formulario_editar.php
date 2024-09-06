<?php

include("conn.php");

$numero = $_GET["numero"];

$query = $conn->query("SELECT `tipo`, `numero`, `nombres`, `apellidos`, `programa`, `ficha`, `correo`, `celular` 
FROM `aprendices` WHERE numero = $numero");

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
        <div class="row justify-content-center align-items-center g-2">
            <div class="col"></div>
            <div class="col">
                <h1 class="text-center mt-5 text-uppercase">formulario editar</h1>
                <div class="card">
                    <form action="editar.php" method="post">
                        <div class="card-header">Nuevo aprendiz</div>
                        <div class="card-body">
                            <?php while ($aprendices = $query->fetch_object()) { ?>
                                <div class="mb-0" style="display: none;">
                                    <label for="" class="form-label"></label>
                                    <input type="text" value="<?= $aprendices->tipo ?>" class="form-control" name="tipo" id="tipo"/>
                                </div>
                                <div class="mb-0" style="display: none;">
                                    <label for="" class="form-label"></label>
                                    <input type="text" value="<?= $aprendices->numero ?>" class="form-control" name="numero" id="numero" />
                                </div>
                                <div class="mb-0">
                                    <label for="" class="form-label"></label>
                                    <input type="text" value="<?= $aprendices->nombres ?>" class="form-control" name="nombres" id="nombres" />
                                </div>
                                <div class="mb-0">
                                    <label for="" class="form-label"></label>
                                    <input type="text" value="<?= $aprendices->apellidos ?>" class="form-control" name="apellidos" id="apellidos" />
                                </div>
                                <div class="mb-0">
                                    <label for="" class="form-label"></label>
                                    <input type="text" value="<?= $aprendices->programa ?>" class="form-control" name="programa" id="programa" />
                                </div>
                                <div class="mb-0">
                                    <label for="" class="form-label"></label>
                                    <input type="text" value="<?= $aprendices->ficha ?>" class="form-control" name="ficha" id="ficha" />
                                </div>
                                <div class="mb-0">
                                    <label for="" class="form-label"></label>
                                    <input type="text" value="<?= $aprendices->correo ?>" class="form-control" name="correo" id="correo" />
                                </div>
                                <div class="mb-0">
                                    <label for="" class="form-label"></label>
                                    <input type="text" value="<?= $aprendices->celular ?>" class="form-control" name="celular" id="celular" p />
                                </div>
                            <?php } ?>
                            <div class="div" style="text-align: right;">
                                <button type="submit" class="btn btn-primary mt-4">
                                    Editar
                                </button>
                                <a name="" id="" class="btn btn-danger mt-4" href="index.php" role="button">Cancelar</a>
                            </div>
                        </div>
                        <div class="card-footer text-muted"></div>
                    </form>
                </div>
            </div>
            <div class="col"></div>
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