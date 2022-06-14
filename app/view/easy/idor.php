<?php require view('static/header') ?>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading text-center">IDOR Nedir?</h1><br>
        <p style="text-align: justify">
            Bir web uygulamasında ya da herhangi farklı bir uygulamada, nesnelere doğrudan erişmek için kullanıcı
            tarafından sağlanan girdinin kullanılması sonucu ortaya çıkan bir tür erişim denetimi (Access Control)
            güvenlik açığıdır. IDOR zafiyeti bir nevi request değiştirme metodu uygulamaktadır. Bir kullanıcının izni
            olmadan onun adına
            veri ekleme, silme, değiştirme ya da okuma gibi işlemler yapılabilmektedir.
        </p>
        <hr>
        <br>
        <h1 class="jumbotron-heading text-center">Nasıl Sömürülür?</h1><br>
        <ul style="text-align: justify">
            <li>Profil sayfanızda yer alan hakkında alanını istediğiniz şekilde güncelleyebilirsiniz. Zafiyetin
                sömürülmesinde bu alandan yararlanacağız.
            </li>
            <li>Öğeyi denetle yaparak kodları incelediğimizde &lt;input type="hidden" name="user_id" value=""&gt; şeklinde bir kod bloğu olduğunu görüyoruz. </li>
            <li>Açılan kod satırları içerisinde kullanıcıya ait id değerinin yer aldığı satırı bulmanız gerekmektedir.
                Backend tarafında id değeri post işlemi ile alındığından dolayı burada değer görülebilir ve
                değiştirilebilir.
            </li>
            <li>Karşı tarafa iletmek istediğiniz mesajı girdi alanına yazınız ve id değerini değiştirerek
                güncelleyiniz.
            </li>
            <li>Artık girdiğiniz id değerine sahip kullanıcının veri tabanında daha önceden tutulan hakkında bilgisi
                ekranınızda gözükecek ve veri tabanında yer alan eski bilgi girdiğiniz bilgi ile güncellenecektir.
                Dolayısıyla kullanıcı kendi hesabına giriş yaptığında artık sizin göndermiş olduğunuz mesajı görecektir.
            </li>
        </ul>
    </div>
</section>
<div class="container">
    <div class="card m-5">
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
        <div class="card-body">
            <img src="<?= public_url('images/profile.jpeg') ?>" class="rounded-circle mx-auto d-block mt-2"
                 style="max-width: 10%;" alt="Cinque Terre">
            <?php if (!$query2) { ?>
                <h4 class="card-title"><?= $query['user_name'] ?></h4>
                <p class="card-text"><b><?= user_ranks($query['user_rank']) ?></b></p>
            <?php } else { ?>
                <h4 class="card-title"><?= $query2['user_name'] ?></h4>
                <p class="card-text"><b><?= user_ranks($query2['user_rank']) ?></b></p>
            <?php } ?>
            <form action="" method="post">
                <h4 class="mb-3">Profil</h4>
                <div class="mb-3 mt-3">
                    <label for="comment"><b>Hakkında</b></label>
                    <?php if (!$query2) { ?>
                        <textarea class="form-control" rows="5" id="comment"
                                  name="user_about"><?= $query['user_about'] ?></textarea>
                    <?php } else { ?>
                        <textarea class="form-control" rows="5" id="comment"
                                  name="user_about"><?= $query2['user_about'] ?></textarea>
                    <?php } ?>
                </div>
                <button type="submit" name="submit" class="btn btn-outline-primary d-flex justify-content-end">
                    Güncelle
                </button>
                <input type="hidden" name="user_id" value="<?= $query['user_id'] ?>">
            </form>
            <button type="submit" class="btn btn-outline-secondary d-flex justify-content-end my-3"><a
                        href="<?= site_url('changePassword') ?>">Şifre Değiştir</a></button>
        </div>
    </div>
</div>


<?php require view('static/footer') ?>





