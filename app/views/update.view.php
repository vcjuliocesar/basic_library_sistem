<?php require ('partials/header.php');?>

<?php require ('partials/nav.php');?>
<?php //dd($books[0]->id); ?>
<div class="container">
<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-10 col-lg-12 col-md-9">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Update</h1>
              </div>
              <form class="user" action="/update" method="post">
                <div class="form-group">
                  <input type="hidden" name="id" value="<?= $books[0]->id; ?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                  <input type="text" name="titulo" value="<?= $books[0]->titulo; ?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                  <input type="text" name="categoria" value="<?= $books[0]->categoria; ?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                  <input type="text" name="autor" value="<?= $books[0]->autor; ?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">

                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Save</button>
              </form>


            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
</div>
<?php require ('partials/footer.php');?>
