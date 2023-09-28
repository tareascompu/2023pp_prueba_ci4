<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Modificar Nivel Academico</title>
</head>

<body>
    <div class="container">
        <h1>Modificar Nivel Académico</h1>
        <form action="<?= base_url('modificar_nivel_acad') ?>" method="post">
            <div class="mb-3">
                <label for="txt_codigo" class="form-label">Código:</label>
                <input type="text" class="form-control" id="txt_codigo" name="txt_codigo" placeholder="Código" value="<?=$datosNivel['cod_nivel_acad']?>">
            </div>
            <div class="mb-3">
                <label for="txt_nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Nombre" value="<?=$datosNivel['nombre']?>">
            </div>
            <div class="mb-3">
                <label for="txt_descripcion" class="form-label">Descripción:</label>
                <input type="text" class="form-control" id="txt_descripcion" name="txt_descripcion" placeholder="Descripción" value="<?=$datosNivel['descripcion']?>">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" id="btn_guardar" name="btn_guardar" value="Guardar cambios">
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>