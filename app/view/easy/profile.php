<?php require view('static/header')?>

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
            <img src="<?=public_url('images/profile.jpeg')?>" class="rounded-circle mx-auto d-block mt-2" style="max-width: 10%;" alt="Cinque Terre">
            <h4 class="card-title"><?=$_SESSION['user_name']?></h4>
            <p class="card-text"><b><?=user_ranks($_SESSION['user_rank'])?></b></p>
            <form action="" method="post">
                <h4 class="mb-3">Profil</h4>
                <div class="mb-3 mt-3">
                    <label for="comment"><b>Hakkında</b></label>
                    <textarea class="form-control" rows="5" id="comment" name="user_about"><?=$query['user_about']?></textarea>
                </div>
                <input type="hidden" name="submit" value="1">
                <button type="submit" class="btn btn-outline-primary d-flex justify-content-end">Güncelle</button>
            </form>
            <button type="submit" class="btn btn-outline-secondary d-flex justify-content-end my-3"><a href="<?=site_url('changePassword')?>">Şifre Değiştir</a></button>
        </div>
    </div>
</div>


<?php require view('static/footer')?>





