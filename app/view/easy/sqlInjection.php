<?php require view('static/header') ?>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading text-center">SQL Injection Nedir?</h1><br>
        <p>
            Güncel olarak 2021 yılında yayınlanan OWASP Top 10 listesinde Injection başlığı altında yer alan zafiyet
            çeşitlerinden birisidir. Web uygulaması üzerinde kullanıcıdan girdi (input) alınan her yerde bulunma
            olasılığı yüksektir. Kullanıcının, girdiği verinin yanında ek olarak SQL sorgusu çalıştırabilmesi
            zafiyetin bulunduğunu göstermektedir.
        </p>
        <hr>
        <br>
        <h1 class="jumbotron-heading text-center">Nasıl Sömürülür?</h1><br>
        <ul style="text-align: justify">
            <li>Aşağıda bulunan login formunda isterseniz SQL sorguları çalıştırabiliriz.</li>
            <li>Öncelikle bu formun arka planında nasıl bir sorgu çalıştığını anlamamız gerekiyor.</li>
            <li>Bu bir login formu olduğu için kabaca "SELECT * FROM users WHERE username='$username' AND password='$password' gibi bir sorgu çalıştığını tahmin ediyoruz.</li>
            <li>Sorgudaki $username ve $password yerine bizim girdiğimiz username ve parola eklenecek.</li>
            <li>Bunun için username yerine arka planda çalışan sql sorgusunu manipüle edecek bir sorgu eklememiz gerekiyor.</li>
            <li>Kullanıcı adı yerine ktu'# ve parola yerine herhangi bir şey yazarak giriş yapmayı deneyin.</li>
            <li>Yeni sorgumuz şu şekilde oluştu; "SELECT * FROM users WHERE username='ktu'#' AND password='$password'</li>
            <li>Burada görüldüğü gibi kullanıcı adından sonrası yorum olarak algılanacağı için parolanın ne olduğu kontrol edilmeden bizim giriş yapmamız mümkün olmaktadır.</li>
            <li>Daha farklı sql sorguları veya filtreleme uygulanmış formlar için sömürme tekniklerini SQL Injection Bypass Authentication Cheatsheet diye aratarak araştırabilirsiniz.</li>
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
                    <label for="username">Kullanıcı Adınız</label>
                    <input type="text" value="<?= $_POST['username'] ?>" class="form-control" name="username"
                           id="username" placeholder="Kullanıcı adınızı yazın..">
                </div>
                <!--                <div class="form-group">-->
                <!--                    <label for="email">E-posta Adresiniz</label>-->
                <!--                    <input type="text" class="form-control" id="email"placeholder="E-posta adresinizi yazın..">-->
                <!--                </div>-->
                <div class="form-group">
                    <label for="password">Şifreniz</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="*******">
                </div>
                <input type="hidden" name="submit" value="1">
                <button type="submit" class="btn btn-primary">Giriş Yap</button>
            </form>
        </div>

    </div>
</div>

<?php require view('static/footer') ?>





