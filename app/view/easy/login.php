<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>--><? //= setting('title') ?><!--</title>-->
<!--    <link rel="stylesheet" href="--><? //= public_url('deneme.css') ?><!--">-->
<!--</head>-->
<!--<body>-->
<!---->
<!--<h1>EASY</h1>-->
<!--<a href="--><? //= site_url('commandInjection') ?><!--">Command Injection</a><br>-->
<!--<a href="--><? //= site_url('xssReflected') ?><!--">XSS Reflected</a><br>-->
<!--<a href="--><? //= site_url('admin') ?><!--">Admin Page</a><br><br>-->
<!---->
<!--<div>-->
<!--    <form action="" method="post" class="form label">-->
<!--        <li>-->
<!--            <label>Site Teması</label>-->
<!--            <div class="form-content">-->
<!--                <select name="settings[theme]">-->
<!--                    <option value=""> - Tema Seç -</option>-->
<!--                    --><?php //foreach ($themes as $theme): ?>
<!--                        <option --><? //= setting('theme') == $theme ? ' selected ' : null ?>
<!--                                value="--><? //= $theme ?><!--">--><? //= $theme ?><!--</option>-->
<!--                    --><?php //endforeach; ?>
<!--                </select>-->
<!--            </div>-->
<!--        </li>-->
<!--        <input type="hidden" name="submit" value="1">-->
<!--        <button type="submit">Ayarları Kaydet</button>-->
<!--    </form>-->
<!--</div>-->
<!---->
<!---->
<!--</body>-->
<!--</html>-->

<?php require view('static/header') ?>

<div class="container">
    <div class="row justify-content-md-center mt-4">

        <div class="col-md-4">
            <form action="" method="post">
                <h3 class="mb-3">Giriş Yap</h3>
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
                    <input type="text" value="<?= post('username') ?>" class="form-control" name="username"
                           id="username" placeholder="Kullanıcı adınızı yazın..">
                </div>
                <div class="form-group">
                    <label for="password">Parola</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="*******">
                </div>
                <input type="hidden" name="submit" value="1">
                <button type="submit" class="btn btn-primary">Giriş Yap</button>
            </form>
        </div>

    </div>
</div>

<?php require view('static/footer') ?>





