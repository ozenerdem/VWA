<?php require view('static/header') ?>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading text-center">Security Misconfiguration Nedir?</h1><br>
        <p style="text-align: justify">
            Bu sayfada kullanıcılar görmemesi gereken hata mesajlarını görebilmektedir. Örnek olarak kullanıcı adımızı
            girdiğimizde alt tarafta notice ile başlayan bir uyarı mesajı görmekteyiz. Bu tarz yapılar try-catch
            yapısı ile kontrol edilip kullanıcıya belirlenen farklı bir mesaj gösterilebilir. Aynı zamanda kullanıcı adı
            girişi yerine veri tabanı sorgusuna müdahele edebilecek bir girdi yaptığımızda veri tabanından dönen hata
            mesajını görmekteyiz. Bu hata mesajında dosya uzantısından arka planda çalışan veri tabanı sorgusuna kadar
            bilgiler yer almaktadır. Bu tarz hata mesajları kritiktir ve kullanıcılara gösterilmemesi gerekmektedir.
        </p>
    </div>
</section>
<div class="container">
    <div class="row justify-content-md-center mt-4">
        <div class="col-md-4">
            <form action="" method="get">
                <!--                <h3 class="mb-3">SQL Injection GET</h3>-->
                <h4 class="mb-3">Uygulayalım</h4>
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
                    <label for="username">Kullanıcı Adınız</label>
                    <input type="text" value="<?= $_GET['username'] ?>" class="form-control" name="username"
                           id="username" placeholder="Kullanıcı adınızı yazın..">
                </div>
                <!--                <div class="form-group">-->
                <!--                    <label for="email">E-posta Adresiniz</label>-->
                <!--                    <input type="text" class="form-control" id="email"placeholder="E-posta adresinizi yazın..">-->
                <!--                </div>-->
                <input type="hidden" name="submit" value="1">
                <button type="submit" class="btn btn-primary">Giriş Yap</button>
                <?php if ($query): ?>
                    <div class="alert alert-success my-3" role="alert">
                        <p>username: <?= $query['user_name']; ?></p>
                        <p>userurl: <?= $query['user_url']; ?></p>
                        <p>userrole: <?= user_ranks($query['user_rank']); ?></p>
                    </div>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>

<div class="container p-3 my-3">
    <?php if ($fault): ?>
        <table class="table table-bordered">
            <thead>
            <tr class="table-danger">
                <td colspan="2" class="error-header"><b>Error: Failure is always an option and this situation proves
                        it</b>
                    (from <a href="https://github.com/webpwnized/mutillidae" target="_blank">Mutillidae</a>)
                </td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="error-label"><b>Line</b></td>
                <td class="error-detail"><?= $e->getLine(); ?></td>
            </tr>
            <tr class="table-active">
                <td class="error-label"><b>Code</b></td>
                <td class="error-detail"><?= $e->getCode(); ?></td>
            </tr>
            <tr>
                <td class="error-label"><b>File</b></td>
                <td class="error-detail"><?= $e->getFile(); ?></td>
            </tr>
            <tr class="table-active">
                <td class="error-label"><b>Message</b></td>
                <td class="error-detail"><?= $e->getMessage(); ?></td>
            </tr>
            <tr>
                <td class="error-label"><b>Trace</b></td>
                <td class="error-detail">file:<?= $e->getTrace()[1]['file'] ?>line:<?= $e->getTrace()[1]['line'] ?></td>
            </tr>
            <tr class="table-active">
                <td class="error-label"><b>SQL Query</b></td>
                <td class="error-detail"><?= $e->getTrace()[0]['args'][0] ?></td>
            </tr>
            </tbody>
        </table>
    <?php endif; ?>
</div>

<?php require view('static/footer') ?>





