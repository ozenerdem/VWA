<?php require view('static/header') ?>
<div class="container">
    <div class="justify-content-md-center mt-4">
        <h1 class="d-flex justify-content-center mb-3">CSRF</h1>
        <h3>CSRF Nedir?</h3>
        <h3>Nasıl Sömürülür?</h3>
        <ul>
            <li> Öncelikle şifrenizi değiştiriniz.</li>
            <li> Daha sonra oluşan url'i kopyalayınız.</li>
            <li> Bir başka hesaba giriş yaparak url'i adres çubuğuna yapıştırınız.</li>
            <li> Girdiğiniz diğer hesabın parolasının da az önceki değiştirdiğiniz hesabın parolası ile aynı
                şekilde değiştiğini
                göreceksiniz.
            </li>
            <li> Bu zafiyetin önlenebilmesi için CSRF Token kullanılması gerekmektedir. Fakat hiçbir kontrol
                yapılmadığı için
                sadece url'i kopyalayarak farklı bir kullanıcıya göndermeniz ve o kullanıcının bu url'e
                tıklaması ile
                karşı tarafın şifresini değiştirebilmektesiniz.
            </li>
        </ul>
    </div>
</div>
<div class="container">
    <hr>
    <div class="row justify-content-md-center mt-4">

        <div class="col-md-4">
            <form action="" method="get">
<!--                <h3 class="mb-3">CSRF</h3>-->

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





