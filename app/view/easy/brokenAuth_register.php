<?php require view('static/header') ?>
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading text-center">Broken Authentication Nedir?</h1><br>
            <p style="text-align: justify">
                Bu zafiyet genel olarak kimlik doğrulama, oturum yönetimi gibi fonksiyonlarış yanlış kullanılmasıyla
                ortaya çıkmaktadır. Bu örnektede kullanıcılar siteye üye olurken gerekli kontroller sağlanmadığı için
                zafiyet oluşmuştur.
            </p>
            <hr>
            <br>
            <h1 class="jumbotron-heading text-center">Nasıl Sömürülür?</h1><br>
            <ul style="text-align: justify">
                <li>Broken Authentication Zafiyeti, kimlik doğrulamayla ilgili saldırılara karşı kritik bir önem taşımaktadır.</li>
                <li>Burada planlanan senaryo, aynı kullanıcı adını boşluk bir şekilde yazdığınızda da giriş yapmanın mümkün olmasıdır.</li>
                <li>Dolayısıyla Broken Authentication – Register Form’unda test edilecek durum boşluklu bir şekilde kayıt olunup olunamadığıdır.</li>
                <li>Register Formunu kullanabilmeniz için öncelikli olarak gereken veri, elinizde veritabanında kayıtlı olan bir kullanıcının, kullanıcı adı(user name) bilgisi olup olmamasıdır.</li>
                <li>Bu bilgiye sahip iseniz Register Formu üzerinden aynı kullanıcı adını boşluklu bir şekilde yazarak kayıt işlemini gerçekleştirebilirsiniz.</li>
                <li>Şuan böyle bir bilgiye sahip olmadığınız için “Kayıt Ol” sayfasına girerek herhangi bir kullanıcı adı yakalamanız istenmektedir.</li>
                <li>Örneğin “admin” olarak kayıt olmaya çalıştığınızda “Lütfen farklı bir kullanıcı adı seçiniz.” Şeklinde bir uyarı mesajı ile karşılaşacaksınız.</li>
                <li>Bu noktada kendinize bir kurban seçtiniz diyebiliriz.</li>
                <li>Tekrardan Broken Authentication – Register Formuna geldiğinizde “   admin” yazarak veritabanına aynı kullanıcı adı ile üye oldunuz.</li>
                <li>Şimdi kurban olarak seçtiğiniz kişinin bilgilerine erişmek için Broken Authentication – Login Sayfasına gidiniz.</li>
            </ul>
        </div>
    </section>
    <div class="container">
        <div class="row justify-content-md-center mt-4">
            <div class="col-md-4">
                <form action="" method="get">
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
                        <input type="text" value="" class="form-control" name="username"
                               id="username" placeholder="Kullanıcı adınızı yazın..">
                    </div>
                    <div class="form-group">
                        <label for="password">Parola</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="********">
                    </div>
                    <div class="form-group">
                        <label for="password-again">Parola (Tekrar)</label>
                        <input type="password" class="form-control" name="password_again" id="password-again"
                               placeholder="********">
                    </div>
                    <input type="hidden" name="submit" value="1">
                    <button type="submit" class="btn btn-primary">Kayıt Ol</button>
                </form>
            </div>
        </div>
    </div>

<?php require view('static/footer') ?>