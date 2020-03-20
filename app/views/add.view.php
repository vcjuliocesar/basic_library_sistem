<?php require ('partials/header.php');?>

<body class="sb-nav-fixed">
  <?php require ('partials/nav.php');?>
  <?php require ('partials/sidenav.php');?>
  <div id="layoutSidenav_content">
        <main>
          <div class="card mb-4">
              <div class="card-header"><i class="fas fa-book"></i>Add Books</div>
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="card-body">
                      <form action="add" method="post">

                        <div class="form-group">
                          <label class="small mb-1" for="title">Title</label>
                          <input name="title" class="form-control py-4" id="inputTitle" type="text" placeholder="Enter Title" />
                        </div>
                        <div class="form-group">
                          <label class="small mb-1" for="Category">Category</label>
                          <input name="category" class="form-control py-4" id="inputCategory" type="text" placeholder="Enter Category" />
                        </div>
                        <div class="form-group">
                          <label class="small mb-1" for="Author">Author</label>
                          <input name="author" class="form-control py-4" id="inputAuthor" type="text"  placeholder="Enter Author" />
                        </div>
                        <div class="form-group">
                          <label class="small mb-1" for="Publication_at">Publication at</label>
                          <input name="publication_at" class="form-control py-4" id="inputCategory" type="text"  placeholder="Enter Publication at" />
                        </div>
                        <div class="form-group">
                          <label class="small mb-1" for="Publication_at">Quantity</label>
                          <input name="quantity" class="form-control py-4" id="inputQuantity" type="text" value="0" placeholder="Enter Quantity" />
                        </div>
                        <div class="form-group">
                          <label class="small mb-1" for="Publication_at">Available</label>
                          <input name="available" class="form-control py-4" id="inputAvailable" type="text" value="0" placeholder="Enter Available" />
                        </div>

                    <button type="submit" class="btn btn-primary">Update</button></div>
                </form>
              </div>
          </div>
        </div>
       </div>
      </main>

<?php require ('partials/footer.php');?>
