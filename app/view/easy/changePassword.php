<?php require view('static/header') ?>
<div class="container">
    <div class="row justify-content-md-center mt-4">
        <div class="col-md-4">
            <form action="" method="post">
                <h3 class="mb-3">Şifre Değiştir</h3>
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
                    <label for="password">Yeni Şifre</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="password-again">Yeni Şifre (Tekrar)</label>
                    <input type="password" class="form-control" name="password_again" id="password-again">
                </div>
                <input type="hidden" name="submit" value="1">
                <button type="submit" class="btn btn-primary">Güncelle</button>
            </form>
        </div>

    </div>
</div>

<?php require view('static/footer') ?>





