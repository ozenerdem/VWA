<?php require view('static/header') ?>

<div class="container">
    <div class="row justify-content-md-center mt-4">
        <div class="col-md-4">
            <form action="" method="get">
                <h4 class="mb-3">Directory Traversal</h4>
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
                <div class="form-group">
                    <input type="text" value="<?= $_GET['username'] ?>" class="form-control" name="word"
                           id="word" placeholder="Ara">
                </div>
<!--                <input type="hidden" name="submit" value="1">-->
                <button type="submit" class="btn btn-primary">Ara</button>
            </form>
        </div>
    </div>
</div>

<?php require view('static/footer') ?>





