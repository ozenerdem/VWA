<?php require view('static/header') ?>

    <div class="container">
        <div class="row justify-content-md-center mt-4">
            <div class="col-md-4">
                <form action="" method="get">
                    <h3 class="mb-3"> Broken Auth - Register Form</h3>
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
                        <label for="username">Kullanıcı Adı</label>
                        <input type="text" value="" class="form-control" name="username"
                               id="username" placeholder="Kullanıcı adınızı yazın..">
                    </div>
                    <div class="form-group">
                        <label for="password">Parola</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="********">
                    </div>
                    <div class="form-group">
                        <label for="password-again">Parola (Tekrar)</label>
                        <input type="password" class="form-control" name="password_again" id="password-again"
                               placeholder="********">
                    </div>
                    <input type="hidden" name="submit" value="1">
                    <button type="submit" class="btn btn-primary">Kayıt Ol</button>
                </form>
            </div>
        </div>
    </div>

<?php require view('static/footer') ?>