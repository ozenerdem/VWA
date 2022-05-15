<?php require view('static/header') ?>

<div class="container">
    <div class="row justify-content-md-center mt-4">

        <div class="col-md-4">
            <form action="" method="get">
                <h3 class="mb-3">CSRF</h3>
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
<!--                <div class="form-group">-->
<!--                    <label for="username">Şu Anki Şifre</label>-->
<!--                    <input type="password" class="form-control" name="current_password" id="current_password">-->
<!--                </div>-->
                <!--                <div class="form-group">-->
                <!--                    <label for="email">E-posta Adresiniz</label>-->
                <!--                    <input type="text" class="form-control" id="email"placeholder="E-posta adresinizi yazın..">-->
                <!--                </div>-->
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





