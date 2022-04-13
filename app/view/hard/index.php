<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= setting('title') ?></title>
<!--    <link rel="stylesheet" href="--><?//= public_url('deneme.css') ?><!--">-->
</head>
<body>

<h1>HARD</h1>
<a href="<?= site_url('commandInjection_hard') ?>">Command Injection</a><br>
<a href="<?= site_url('xssReflected') ?>">XSS Reflected</a><br>
<a href="<?= site_url('admin') ?>">Admin Page</a><br><br>

<div>
    <form action="" method="post" class="form label">
        <li>
            <label>Site Teması</label>
            <div class="form-content">
                <select name="settings[theme]">
                    <option value=""> - Tema Seç -</option>
                    <?php foreach ($themes as $theme): ?>
                        <option <?= setting('theme') == $theme ? ' selected ' : null ?>
                                value="<?= $theme ?>"><?= $theme ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </li>
        <!--        <li class="submit">-->
        <input type="hidden" name="submit" value="1">
        <button type="submit">Ayarları Kaydet</button>
        <!--        </li>-->
        </ul>
    </form>
</div>



</body>
</html>