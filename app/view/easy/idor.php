<?php require view('static/header') ?>

<div class="container">
    <div class="row justify-content-md-center mt-4">

        <div class="col-md-4">
            <form action="" method="post">
<!--                <h3 class="mb-3">SQL Injection GET</h3>-->
                <h4 class="mb-3">Profil</h4>
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

                <?php
                if($_SESSION):?>
                        <div class="alert alert-success" role="alert">
                            <p>username: <?=$query['user_name'];?></p>
                            <p>userrole: <?=user_ranks($query['user_rank']); ?></p>
                            <p>Hakkında:</p>
                            <textarea name="user_about" id="" cols="30" rows="2"><?=$query['user_about']; ?></textarea>
                        </div>
                <?php endif;  ?>
                <button type="submit" name="submit" class="btn btn-primary">Hakkındayı güncelle</button>
                <input type="hidden" name="user_id" value="<?=$query['user_id']?>">
            </form>
        </div>
    </div>
</div>

<?php require view('static/footer') ?>





