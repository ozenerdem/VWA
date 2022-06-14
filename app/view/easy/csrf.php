<?php require view('static/header') ?>
<!--<div class="container">-->
<!--    <div class="justify-content-md-center mt-4">-->
<!--        <h1 class="d-flex justify-content-center mb-3">CSRF</h1>-->
<!--        <h3>CSRF Nedir?</h3>-->
<!--        <h3>Nasıl Sömürülür?</h3>-->
<!--        <ul>-->
<!--            <li> Öncelikle şifrenizi değiştiriniz.</li>-->
<!--            <li> Daha sonra oluşan url'i kopyalayınız.</li>-->
<!--            <li> Bir başka hesaba giriş yaparak url'i adres çubuğuna yapıştırınız.</li>-->
<!--            <li> Girdiğiniz diğer hesabın parolasının da az önceki değiştirdiğiniz hesabın parolası ile aynı-->
<!--                şekilde değiştiğini-->
<!--                göreceksiniz.-->
<!--            </li>-->
<!--            <li> Bu zafiyetin önlenebilmesi için CSRF Token kullanılması gerekmektedir. Fakat hiçbir kontrol-->
<!--                yapılmadığı için-->
<!--                sadece url'i kopyalayarak farklı bir kullanıcıya göndermeniz ve o kullanıcının bu url'e-->
<!--                tıklaması ile-->
<!--                karşı tarafın şifresini değiştirebilmektesiniz.-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading text-center">CSRF Nedir?</h1><br>
        <p style="text-align: justify">
            Web uygulamasını kullanmakta olan kullanıcıların istekleri dışında işlemlerin gerçekleştirilebilmesi CSRF
            (Siteler Arası İstek Sahtekarlığı) zafiyetinin varlığını göstermektedir. Uygulamaya giden isteklerin hangi
            kaynaktan ve nasıl gönderildiği kontrol edilmediği taktirde ortaya çıkabilmektedir. Zafiyet çoğunlukla
            siteyi kodlayan yazılımcıların bu ayrıntıları gözünden kaçırması durumunda oluşmaktadır. CSRF zafiyetinde
            uygulamayı kullanmakta olan kullanıcının yetkinliğine bağlı olarak zararlar verilebilmektedir. Herhangi bir
            kullanıcının hesabı ile sistem yöneticisinin hesabı üzerinden sızılan açıklıktan verilen zararın boyutu aynı
            olmayacaktır.
        </p>
        <hr>
        <br>
        <h1 class="jumbotron-heading text-center">Nasıl Sömürülür?</h1><br>
        <ul style="text-align: justify">
            <li>CSRF zafiyetini sömürebilmek için ilk olarak aşağıda yer alan şifre güncelleme alanından mevcut
                şifrenizi güncelleyiniz.
            </li>
            <li>İşlemi başarıyla tamamlandığında url adresine dikkat edilirse burada artık güncel parola değeri
                gösterilmektedir. Parola bilgisinin gizli olması gerekirken url üzerinde gözükmesinden arka planda GET
                metodunun kullanıldığı anlaşılabilmektedir.
            </li>
            <li>Kullanılan metod veri gizliliğini sağlamamakta ve güvenlik
                risklerini arttırmaktadır.</li>
            <li>Oluşan yeni url adresini kopyalayınız.</li>
            <li>Oturumu açık olan başka bir kullanıcıya link göndererek bu bağlantıya girmesini sağlayınız.</li>
            <li>Seçtiğiniz kullanıcı göndermiş olduğunuz url bağlantısına tıkladığında artık güncel parolası sizin
                parolanız olacaktır.
            </li>
            <li>URL bağlantısı ile belirlediğiniz kullanıcıların hesaplarını bu yöntemi kullanarak ele
                geçirebilirsiniz.
            </li>
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
                <!--                <div class="form-group">-->
                <!--                    <label for="username">Şu Anki Şifre</label>-->
                <!--                    <input type="password" class="form-control" name="current_password" id="current_password">-->
                <!--                </div>-->
                <!--                <div class="form-group">-->
                <!--                    <label for="email">E-posta Adresiniz</label>-->
                <!--                    <input type="text" class="form-control" id="email"placeholder="E-posta adresinizi yazın..">-->
                <!--                </div>-->
                <div class="form-group">
                    <label for="password">Yeni Şifre</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="password-again">Yeni Şifre (Tekrar)</label>
                    <input type="password" class="form-control" name="password_again" id="password-again">
                </div>
                <input type="hidden" name="submit" value="1">
                <button type="submit" class="btn btn-primary">Güncelle</button>
            </form>
        </div>

    </div>
</div>

<?php require view('static/footer') ?>





