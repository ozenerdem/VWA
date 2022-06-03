<?php require view('static/header') ?>


<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">File Upload</h1>
        <div class="col-md-auto mt-3 d-flex justify-content-center flex-column">
            <form action="" method="post" enctype="multipart/form-data">
                <?php if ($err = error()): ?>
                    <div class="container w-50">
                        <div class="alert alert-danger" role="alert">
                            <?= $err ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($success = success()): ?>
                    <div class="container w-50">
                        <div class="alert alert-success" role="alert">
                            <?= $success ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="container w-50">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="fileUpload">
                        <input type="hidden" name="submit" value="1">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php require view('static/footer') ?>





