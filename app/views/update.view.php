<?php require ('partials/header.php');?>

<body class="sb-nav-fixed">
  <?php require ('partials/nav.php');?>
  <?php require ('partials/sidenav.php');?>
  <div id="layoutSidenav_content">
        <main>
          <div class="card mb-4">
              <div class="card-header"><i class="fas fa-book"></i>Update Books</div>
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="card-body">
                      <form action="update" method="post">
                        <input type="hidden" name="idbook" value="<?= $books[0]->id; ?>">
                        <div class="form-group">
                          <label class="small mb-1" for="title">Title</label>
                          <input name="title" class="form-control py-4" id="inputTitle" type="text" value="<?= $books[0]->title; ?>" placeholder="Enter Title" />
                        </div>
                        <div class="form-group">
                          <label class="small mb-1" for="Category">Category</label>
                          <input name="category" class="form-control py-4" id="inputCategory" type="text" value="<?= $books[0]->category; ?>" placeholder="Enter Category" />
                        </div>
                        <div class="form-group">
                          <label class="small mb-1" for="Author">Author</label>
                          <input name="author" class="form-control py-4" id="inputAuthor" type="text" value="<?= $books[0]->author;?>" placeholder="Enter Author" />
                        </div>
                        <div class="form-group">
                          <label class="small mb-1" for="Publication_at">Publication at</label>
                          <input name="publication_at" class="form-control py-4" id="inputCategory" type="text" value="<?= $books[0]->publication_at; ?>" placeholder="Enter Publication at" />
                        </div>

                    <button type="submit" class="btn btn-primary">Update</button></div>
                </form>
              </div>
          </div>
        </div>
       </div>
      </main>

<?php require ('partials/footer.php');?>
