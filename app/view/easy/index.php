<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>--><?//= setting('title') ?><!--</title>-->
<!--    <link rel="stylesheet" href="--><?//= public_url('deneme.css') ?><!--">-->
<!--</head>-->
<!--<body>-->
<!---->
<!--<h1>EASY</h1>-->
<!--<a href="--><?//= site_url('commandInjection') ?><!--">Command Injection</a><br>-->
<!--<a href="--><?//= site_url('xssReflected') ?><!--">XSS Reflected</a><br>-->
<!--<a href="--><?//= site_url('admin') ?><!--">Admin Page</a><br><br>-->
<!---->
<!--<div>-->
<!--    <form action="" method="post" class="form label">-->
<!--        <li>-->
<!--            <label>Site Teması</label>-->
<!--            <div class="form-content">-->
<!--                <select name="settings[theme]">-->
<!--                    <option value=""> - Tema Seç -</option>-->
<!--                    --><?php //foreach ($themes as $theme): ?>
<!--                        <option --><?//= setting('theme') == $theme ? ' selected ' : null ?>
<!--                                value="--><?//= $theme ?><!--">--><?//= $theme ?><!--</option>-->
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

<?php require view('static/header')?>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading"><?=setting('welcome_title')?></h1>
        <p class="lead text-muted"><?=setting('welcome_text')?></p>
        <p>
<!--            <a href="#" class="btn btn-secondary my-2">Blog'a Gözat</a>-->
            <a href="#" class="btn btn-primary my-2">İletişime Geç</a>
        </p>
    </div>
</section>
<!--<div class="container">-->
<!--    <div class="row pb-2">-->
<!--        <div class="col-md-12">-->
<!--            <h4 class="pb-3">Neler yapıyorum?</h4>-->
<!--        </div>-->
<!--        <div class="col-md col-12 pb-3">-->
<!--            <div class="card">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">PSD/Sketch to HTML</h5>-->
<!--                    <h6 class="card-subtitle mb-2 text-muted">Front-end Developer</h6>-->
<!--                    <p class="card-text">Photoshop ya da .sketch dosyalarınızı gönderin, html5/css3 kodlanmış şekilde-->
<!--                        geri alın.</p>-->
<!--                    <a href="#" class="btn btn-sm btn-danger">Referanslara Gözat <i class="fa fa-angle-right"></i></a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md col-12 pb-3">-->
<!--            <div class="card">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">Web Yazılım</h5>-->
<!--                    <h6 class="card-subtitle mb-2 text-muted">Back-end Developer</h6>-->
<!--                    <p class="card-text">Projelerinize hayat verip dinamiklik katıyorum. Yazılım dili olarak PHP-->
<!--                        kullanıyorum.</p>-->
<!--                    <a href="#" class="btn btn-sm btn-primary">Referanslara Gözat <i class="fa fa-angle-right"></i></a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md col-12 pb-3">-->
<!--            <div class="card">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">Mobil Uygulama</h5>-->
<!--                    <h6 class="card-subtitle mb-2 text-muted">Mobile Developer</h6>-->
<!--                    <p class="card-text">Native değil ama hybrid olarak istediğin projenin mobil uygulamasını yazıyorum.-->
<!--                        İster react ister cordova.</p>-->
<!--                    <a href="#" class="btn btn-sm btn-dark">Referanslara Gözat <i class="fa fa-angle-right"></i></a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<?php require view('static/footer')?>





