<?php require view('static/header') ?>
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading text-center">Broken Authentication Nedir?</h1><br>
            <p style="text-align: justify">
                Bu zafiyet genel olarak kimlik doğrulama, oturum yönetimi gibi fonksiyonlarış yanlış kullanılmasıyla
                ortaya çıkmaktadır. Bu örnektede kullanıcılar siteye giriş yaparken gerekli kontroller sağlanmadığı için
                zafiyet oluşmuştur.
            </p>
            <hr>
            <br>
            <h1 class="jumbotron-heading text-center">Nasıl Sömürülür?</h1><br>
            <ul style="text-align: justify">
                <li>Form üzerine az önce boşluklu bir şekilde girdiğiniz kullanıcı adı ve şifrenizi yazarak giriş yapınız.</li>
                <li>Broken Authentication – Login Formu arka planda sizin girdiğiniz kullanıcı adını $username = trim($username) kod satırı ile boşluklardan arındırarak almaktadır.</li>
                <li>Dolayısıyla boşluksuz haliyle veri tabanı sorgusu atıldığında kurbanınızın sayfasına ve bilgilerine erişmiş oldunuz!</li>
            </ul>
        </div>
    </section>
    <div class="container">
        <div class="row justify-content-md-center mt-4">
            <div class="col-md-4">
                <form action="" method="post">
                    <h3 class="mb-3">Uygulayalım</h3>
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
                        <input type="text" value="<?= $_POST['username'] ?>" class="form-control" name="username"
                               id="username" placeholder="Kullanıcı adınızı yazın..">
                    </div>
                    <div class="form-group">
                        <label for="password">Parola</label>
                        <input type="password" class="form-control" name="password" id="password"
                               placeholder="********">
                    </div>
                    <input type="hidden" name="submit" value="1">
                    <button type="submit" class="btn btn-primary">Giriş Yap</button>
                </form>
            </div>
        </div>
    </div>

<?php require view('static/footer') ?>