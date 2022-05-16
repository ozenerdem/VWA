<?php require view('static/header') ?>

<section class="jumbotron text-center">
    <div class="container">
        <h1>XSS Stored</h1>
<!--        <div class="breadcrumb-custom">-->
<!--            <a href="#">Anasayfa</a> /-->
<!--            <a href="#" class="active">Blog</a>-->
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
<br>

<div class="container">
    <div class="row">
        <div class="col-md-8">

            <h4 class="pb-3">Son Yorumlar</h4>

            <?php if ($query): ?>
                <?php foreach ($query as $row): ?>
                    <div class="card mb-3">
                        <div class="card-header">
                            <?= $row['message_id'] ?>
                            <div class="date" float="right">
                                <span style="color: #999; font-size: 12px; float: right;" title="<?=$row['message_date']?>">
                                    <?=timeConvert($row['message_date'])?>
                                </span>
                            </div>
                            <div>
                                <?= $row['sender_name'] ?>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['message_subject'] ?></h5>
                            <div class="card-text">
                                <?= $row['message'] ?>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>

            <?php else: ?>
                <div class="alert alert-warning">
                    Henüz hiç yorum yapılmadı, lütfen daha sonra kontrol edin!
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>


<?php require view('static/footer') ?>
