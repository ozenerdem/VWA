<?php require view('static/header') ?>

<div class="container">
    <div class="card m-5">
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
        <div class="card-body">
            <img src="<?= public_url('images/profile.jpeg') ?>" class="rounded-circle mx-auto d-block mt-2"
                 style="max-width: 10%;" alt="Cinque Terre">
            <?php if (!$query2) { ?>
                <h4 class="card-title"><?= $query['user_name'] ?></h4>
                <p class="card-text"><b><?= user_ranks($query['user_rank']) ?></b></p>
            <?php } else { ?>
                <h4 class="card-title"><?= $query2['user_name'] ?></h4>
                <p class="card-text"><b><?= user_ranks($query2['user_rank']) ?></b></p>
            <?php } ?>
            <form action="" method="post">
                <h4 class="mb-3">Profil</h4>
                <div class="mb-3 mt-3">
                    <label for="comment"><b>Hakkında</b></label>
                    <?php if (!$query2) { ?>
                        <textarea class="form-control" rows="5" id="comment"
                                  name="user_about"><?= $query['user_about'] ?></textarea>
                    <?php } else { ?>
                        <textarea class="form-control" rows="5" id="comment"
                                  name="user_about"><?= $query2['user_about'] ?></textarea>
                    <?php } ?>
                </div>
                <button type="submit" name="submit" class="btn btn-outline-primary d-flex justify-content-end">
                    Güncelle
                </button>
                <input type="hidden" name="user_id" value="<?= $query['user_id'] ?>">
            </form>
            <button type="submit" class="btn btn-outline-secondary d-flex justify-content-end my-3"><a
                        href="<?= site_url('changePassword') ?>">Şifre Değiştir</a></button>
        </div>
    </div>
</div>


<?php require view('static/footer') ?>





