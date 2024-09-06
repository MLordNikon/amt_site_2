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
                <h1 class="text-center mt-5 text-uppercase">formulario agregar</h1>
                <div class="card">
                    <form action="agregar.php" method="post">
                        <div class="card-header">Nuevo aprendiz</div>
                        <div class="card-body">
                            <div class="mb-0">
                                <label for="" class="form-label"></label>
                                <select class="form-select form-select" name="tipo" id="tipo">
                                    <option selected>Tipo de documento</option>
                                    <option value="CC">Cedula</option>
                                    <option value="TI">Tarjeta identidad</option>
                                    <option value="PPT">Permiso protección temporal</option>
                                </select>
                            </div>
                            <div class="mb-0">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" name="numero" id="numero" placeholder="Digite el número del documento" />
                            </div>
                            <div class="mb-0">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Digite sus nombres" />
                            </div>
                            <div class="mb-0">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Digite sus apellidos" />
                            </div>
                            <div class="mb-0">
                                <label for="" class="form-label"></label>
                                <select class="form-select form-select" name="programa" id="programa">
                                    <option selected>Programa formativo</option>
                                    <option value="Sistemas">Sistemas</option>
                                    <option value="Programación">Programación</option>
                                    <option value="Electricidad">Electricidad</option>
                                </select>
                            </div>
                            <div class="mb-0">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" name="ficha" id="ficha" placeholder="Digite su numero de ficha" />
                            </div>
                            <div class="mb-0">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" name="correo" id="correo" placeholder="Digite su correo" />
                            </div>
                            <div class="mb-0">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" name="celular" id="celular" placeholder="Digite su numero de celular" />
                            </div>
                            <div class="div" style="text-align: right;">
                                <button type="submit" class="btn btn-primary mt-4">
                                    Agregar
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