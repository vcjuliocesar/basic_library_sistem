<?php require ('partials/header.php');?>

  <body class="sb-nav-fixed">
    <?php require ('partials/nav.php');?>
    <?php require ('partials/sidenav.php');?>
    <div id="layoutSidenav_content">
        <main>
          <div class="card mb-4">
              <div class="card-header"><i class="fas fa-book"></i>Books</div>
              <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Author</th>
                          <th>publication at</th>
                          <th>Quantity</th>
                          <th>Available</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Author</th>
                          <th>publication at</th>
                          <th>Quantity</th>
                          <th>Available</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php foreach ($books as $key => $value): ?>
                          <tr>
                            <th><?= $value->title; ?></th>
                            <th><?= $value->category;?></th>
                            <th><?= $value->author;?></th>
                            <th><?= $value->publication_at;?></th>
                            <th><?= $value->quantity;?></th>
                            <th><?= $value->available;?></th>
                            <th>
                              <a href="delete?id=<?= $value->id;?>" class="btn btn-danger btn-icon-split" data-id="<?= $value->id;?>">
                                <span class="icon text-white-50">
                                  <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Delete</span>
                              </a>
                              <a href="detail?id=<?= $value->id;?>" class="btn btn-warning btn-icon-split" data-id="<?= $value->id;?>">
                                <span class="icon text-white-50">
                                  <i class="fas fa-edit"></i>
                                </span>
                                <span class="text">Edit</span>
                              </a>
                            </th>
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                    <a href="" class="btn btn-success btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-plus-circle"></i>
                      </span>
                      <span class="text">Add</span>
                    </a>
                  </div>
                </div>
              </div>
        </main>
<?php require ('partials/footer.php');?>
