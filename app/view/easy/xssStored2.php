<?php require view('static/header') ?>

<section class="jumbotron text-center">
    <div class="container">
        <h1>Ziyaretçi Defteri</h1>
<!--        <div class="breadcrumb-custom">-->
<!--            <a href="#">Anasayfa</a> /-->
<!--            <a href="#" class="active">İletişim</a>-->
<!--        </div>-->
    </div>
</section>

<div class="container">
    <form action="" method="post">
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
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Ad-Soyad</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
            </div>
<!--            <div class="col-md-6">-->
<!--                <div class="form-group">-->
<!--                    <label for="email">E-posta Adresi</label>-->
<!--                    <input type="email" class="form-control" name="email" id="email">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-6">-->
<!--                <div class="form-group">-->
<!--                    <label for="phone">Telefon Numarası</label>-->
<!--                    <input type="text" class="form-control" name="phone" id="phone">-->
<!--                </div>-->
<!--            </div>-->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="subject">Mesaj Konusu</label>
                    <input type="text" class="form-control" name="subject" id="subject">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="message">Mesaj İçeriği</label>
                    <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <input type="hidden" name="submit" value="1">
                <button type="submit" class="btn btn-primary">Gönder</button>
            </div>

        </div>
    </form>
</div>

<?php require view('static/footer') ?>
