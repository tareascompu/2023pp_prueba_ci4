<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Departamentos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!--CSS datatable-->
  <link rel="stylesheet" href="<?= base_url('css/jquery.dataTables.min.css') ?>">

</head>

<body>
  <div class="container">
    <h1>Departamentos</h1>

    <!-- modal formulario agregar departamento-->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Nuevo
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar departamento</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="<?= base_url('guardar_depto') ?>" method="post">
              <div class="mb-3">
                <label for="txt_codigo" class="form-label">Código:</label>
                <input type="text" class="form-control" id="txt_codigo" name="txt_codigo" placeholder="Código">
              </div>
              <div class="mb-3">
                <label for="txt_nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Nombre">
              </div>
              <div class="mb-3">
                <label for="lst_region" class="form-label">Región:</label>
                <select class="form-select" aria-label="Default select example" name="lst_region">
                  <?php
                  foreach ($resultadoRegion as $datos) {
                  ?>
                    <option value="<?= $datos['cod_region'] ?>"><?= $datos['nombre'] ?></option>
                  <?php
                  }
                  ?>


                </select>
              </div>
              <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" id="btn_guardar" name="btn_guardar" value="Guardar">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="form-control btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <table class="table table-hover pt-3 pb-3" id="dataTable">
      <thead>
        <tr class="table-dark">
          <th>Código</th>
          <th>Nombre</th>
          <th>Nombre región</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($resultadoDepto as $datos) {
        ?>
          <tr>
            <td><?= $datos['cod_depto'] ?></td>
            <td><?= $datos['nombre_depto'] ?></td>
            <td><?= $datos['nombre_region'] ?></td>
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