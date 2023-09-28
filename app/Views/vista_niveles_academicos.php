<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--CSS datatable-->
    <link rel="stylesheet" href="<?= base_url('css/jquery.dataTables.min.css') ?>">

    <title>Niveles Académicos</title>
</head>

<body>
    <div class="container-fluid">
        <h1>Niveles Académicos</h1>

        <!-- Button modal para agregr registros-->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#regionModal">
            Nuevo Nivel Académico
        </button>

        <!-- Modal -->
        <div class="modal fade" id="regionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar nivel académico</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--Formulario agregar región-->
                        <form action="<?= base_url('guardar_nivel_acad') ?>" method="post">
                            <div class="mb-3">
                                <label for="txt_codigo" class="form-label">Código:</label>
                                <input type="text" class="form-control" id="txt_codigo" name="txt_codigo" placeholder="Código">
                            </div>
                            <div class="mb-3">
                                <label for="txt_nombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Nombre">
                            </div>
                            <div class="mb-3">
                                <label for="txt_descripcion" class="form-label">Descripción:</label>
                                <input type="text" class="form-control" id="txt_descripcion" name="txt_descripcion" placeholder="Descripción">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="form-control btn btn-primary" id="btn_guardar" name="btn_guardar" value="Guardar">
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>

        <table class="table table-striped table-hover pt-3 tb-3" id="dataTable">
            <thead>
                <tr class="table-dark">
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Procesos</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($resutado as $fila) {
                ?>
                    <tr>
                        <td><?php echo $fila['cod_nivel_acad'] ?></td>
                        <td><?= $fila['nombre'] ?></td>
                        <td><?= $fila['descripcion'] ?></td>
                        <td><a href="<?=base_url("localizar_modificar_nivel/".$fila['cod_nivel_acad'])?>">Actualizar</a> 
                            / 
                            <a href="<?=base_url("eliminar_nivel_acad/".$fila['cod_nivel_acad'])?>">Eliminar</a>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!--JS datatable-->
    <script src="<?= base_url('js/jquery-3.5.1.js') ?>"></script>
    <script src="<?= base_url('js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('js/configuracionDataTables.js') ?>"></script>

</body>

</html>