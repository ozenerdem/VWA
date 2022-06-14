<?php require view('static/header') ?>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading text-center">XSS Stored Nedir?</h1><br>
        <p>
            Güncel olarak 2021 yılında yayınlanan OWASP Top 10 listesinde Injection başlığı altında yer alan zafiyet
            çeşitlerinden birisidir. Web uygulaması üzerinde kullanıcıdan girdi (input) alınan her yerde bulunma
            olasılığı yüksektir. Kullanıcının, girdiği verinin yanında ek olarak javascript kodu çalıştırabilmesi
            zafiyetin bulunduğunu göstermektedir. XSS Reflected ile arasındaki fark ise; kullanıcının çalıştırdığı
            javascript kodu sayfada yorum olarak depolanacağından siteyi her ziyaret eden kişi bu javascript kodunu
            çalıştırmış olacaktır.
        </p>
        <hr>
        <br>
        <h1 class="jumbotron-heading text-center">Nasıl Sömürülür?</h1><br>
        <ul style="text-align: justify">
            <li>Bir form üzerinden tahmin edebileceğimiz en basit bulgu, ilgili alanlara girdiğiniz ifadelerin bir değişkende tutulacağıdır.</li>
            <li>Dolayısıyla XSS – Stored Form Sayfasında yer alan “Ad-Soyad”, “Mesaj Konusu” ve “Mesaj içeriği” girdilerinizin de bir değişkene atanarak tutulduğunu tahmin edebilirsiniz.</li>
            <li>Şimdi bir yorum yapmayı deneyiniz.</li>
            <li>İlgili alanları doldurduğunuzda karşılaşmayı umduğunuz durum, “Son Yorumlar” başlığı altında adınızın ve mesajınızın görülmesidir.</li>
            <li>Fakat web sitesinin, yine “1” şeklinde bir hata mesajı yolladığını farkedeceksiniz.</li>
            <li>Bu senaryo karşısında, girdiğiniz değerlerin veritabanında herhangi bir filtreleme olmadan tutulduğu tespitini yapabilmeniz beklenmektedir.</li>
            <li>Çünkü masum bir şekilde yaptığınız yorum karşısında bir uyarı mesajı aldınız. Ve bu uyarı mesajını sayfaya ilk girmeyi denediğinizde de almıştınız.</li>
            <li>Bu duruma izin verilip verilmediğini denemek için “Ad-Soyad”, “Mesaj Konusu” ve “Mesaj içeriği” alanlarından birine bir javascript kodu yerleştirmeyi deneyiniz.</li>
            <li>Örneğin &lt;script&gt; alert(1) &lt;/script&gt; kod satırını yazdığınızda da formu göndermenize izin verildiğini ve web sitesinin tekrardan “1” hata mesajı yolladığını göreceksiniz.</li>
            <li>Dolayısıyla XSS- Stored Zafiyeti’nin, Reflected çeşidinden farklı olarak kullanıcıdan alınan girdileri sistemin veritabanına doğrudan kaydettiği çıkarımını ispatlamış oldunuz.</li>
            <li>Buna bağlı olarak XSS- Stored sayfasına ilk girdiğinizde karşılaştığınız hata mesajının sebebine ulaştınız.</li>
            <li>XSS – Stored zafiyeti sizin kodu eklediğiniz sayfayı ziyaret eden kullanıcıların maruz kalacağı bir güvenlik zafiyeti olduğunu görmüş oldunuz.</li>
        </ul>

    </div>
</section>
<div class="container">
    <form action="" method="post">
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
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Ad-Soyad</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="subject">Mesaj Konusu</label>
                    <input type="text" class="form-control" name="subject" id="subject">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="message">Mesaj İçeriği</label>
                    <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <input type="hidden" name="submit" value="1">
                <button type="submit" class="btn btn-primary">Gönder</button>
            </div>

        </div>
    </form>
</div>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-8">

            <h4 class="pb-3">Son Yorumlar</h4>

            <?php if ($query): ?>
                <?php foreach ($query as $row): ?>
                    <div class="card mb-3">
                        <div class="card-header">
                            <?= $row['message_id'] ?>
                            <div class="date" float="right">
                                <span style="color: #999; font-size: 12px; float: right;"
                                      title="<?= $row['message_date'] ?>">
                                    <?= timeConvert($row['message_date']) ?>
                                </span>
                            </div>
                            <div>
                                <?= $row['sender_name'] ?>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['message_subject'] ?></h5>
                            <div class="card-text">
                                <?= $row['message'] ?>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>

            <?php else: ?>
                <div class="alert alert-warning">
                    Henüz hiç yorum yapılmadı, lütfen daha sonra kontrol edin!
                </div>
            <?php endif; ?>

        </div>
    </div>
</div>


<?php require view('static/footer') ?>
