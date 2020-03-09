<?php require ('partials/header.php');?>
<?php require ('partials/nav.php');?>
<?php //dd($books); ?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
    <a href="#" class="btn btn-success btn-icon-split">
      <span class="icon text-white-50">
        <i class="fas fa-check"></i>
      </span>
      <span class="text">Nuevo</span>
    </a>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Autor</th>
                <th>Fecha de publicación</th>
                <th>Disponible</th>
                <th>Accion</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Autor</th>
                <th>Fecha de publicación</th>
                <th>Disponible</th>
                <th>Accion</th>
              </tr>
            </tfoot>
            <tbody>
              <?php foreach ($books as $key => $value): ?>
                <tr>
                  <th><?= $value->titulo; ?></th>
                  <th><?= $value->categoria;?></th>
                  <th><?= $value->autor;?></th>
                  <th><?= $value->fecha_public;?></th>
                  <th><?= $value->stock;?></th>
                  <th>
                    <a href="/delete?id=<?= $value->id;?>" class="btn btn-danger btn-icon-split" data-id="<?= $value->id;?>">
                      <span class="icon text-white-50">
                        <i class="fas fa-trash"></i>
                      </span>
                      <span class="text">Borrar</span>
                    </a>
                    <a href="/detail?id=<?= $value->id;?>" class="btn btn-warning btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-exclamation-triangle"></i>
                      </span>
                      <span class="text">Editar</span>
                    </a>
                  </th>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require ('partials/footer.php');?>
