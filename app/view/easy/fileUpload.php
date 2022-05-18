<?php require view('static/header') ?>

</section>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Command Injection</h1>
        <div class="col-md-auto mt-3 d-flex justify-content-center flex-column">
            <form action="" method="post" enctype="multipart/form-data">
                <?php if ($err = error()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $err ?>
                    </div>
                <?php endif; ?>
                <?php if ($success = success()): ?>
                    <div class="alert alert-success" role="alert">
                        <?= $success ?>
                    </div>
                <?php endif; ?>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="fileUpload">
                    <input type="hidden" name="submit" value="1">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php require view('static/footer') ?>





