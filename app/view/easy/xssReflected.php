<?php require view('static/header') ?>

<section class="jumbotron">
    <div class="container">
        <h1 class="jumbotron-heading text-center">XSS Reflected Nedir?</h1><br>
        <p style="text-align: justify">
            Güncel olarak 2021 yılında yayınlanan OWASP Top 10 listesinde Injection başlığı altında yer alan zafiyet
            çeşitlerinden birisidir. Web uygulaması üzerinde kullanıcıdan girdi (input) alınan her yerde bulunma
            olasılığı yüksektir. Kullanıcının, girdiği verinin yanında ek olarak javascript kodu çalıştırabilmesi
            zafiyetin bulunduğunu göstermektedir.
        </p>
        <hr>
        <br>
        <h1 class="jumbotron-heading text-center">Nasıl Sömürülür?</h1>
        <br>
        <ul style="text-align:justify">
            <li>XSS – Reflected sayfasına girdiğinizde web sitesinin size “1” şeklinde bir hata mesajı yolladığını
                göreceksiniz.
            </li>
            <li>İlgili uyarı mesajını kapattıktan sonra ise site içine yorum yapabileceğiniz bir form uygulaması ile
                karşılaşacaksınız.
            </li>
            <li>Bir form üzerinden tahmin edebileceğimiz en basit bulgu, ilgili alanlara girdiğiniz ifadelerin bir
                değişkende tutulacağıdır.
            </li>
            <li>Dolayısıyla XSS – Stored Form Sayfasında yer alan “Ad-Soyad”, “Mesaj Konusu” ve “Mesaj içeriği”
                girdilerinizin de bir değişkene atanarak tutulduğunu tahmin edebilirsiniz.
            </li>
            <li>Şimdi bir yorum yapmayı deneyiniz.</li>
            <li>İlgili alanları doldurduğunuzda karşılaşmayı umduğunuz durum, “Son Yorumlar” başlığı altında adınızın ve
                mesajınızın görülmesidir.
            </li>
            <li>Fakat web sitesinin, yine “1” şeklinde bir hata mesajı yolladığını farkedeceksiniz.</li>
            <li>Bu senaryo karşısında, girdiğiniz değerlerin veritabanında herhangi bir filtreleme olmadan tutulduğu
                tespitini yapabilmeniz beklenmektedir.
            </li>
            <li>Çünkü masum bir şekilde yaptığınız yorum karşısında bir uyarı mesajı aldınız. Ve bu uyarı mesajını
                sayfaya ilk girmeyi denediğinizde de almıştınız.
            </li>
            <li>Bu duruma izin verilip verilmediğini denemek için “Ad-Soyad”, “Mesaj Konusu” ve “Mesaj içeriği”
                alanlarından birine bir javascript kodu yerleştirmeyi deneyiniz.
            </li>
            <li>Örneğin
                &lt;script&gt; alert(1) &lt;/script&gt;
                kod satırını yazdığınızda da formu göndermenize izin verildiğini ve web sitesinin tekrardan “1” hata
                mesajı yolladığını göreceksiniz.
            </li>
            <li>Dolayısıyla XSS- Stored Zafiyeti’nin, Reflected çeşidinden farklı olarak kullanıcıdan alınan girdileri
                sistemin veritabanına doğrudan kaydettiği çıkarımını ispatlamış oldunuz.
            </li>
            <li>Buna bağlı olarak XSS- Stored sayfasına ilk girdiğinizde karşılaştığınız hata mesajının sebebine
                ulaştınız.
            </li>
            <li>XSS – Stored zafiyeti sizin kodu eklediğiniz sayfayı ziyaret eden kullanıcıların maruz kalacağı bir
                güvenlik zafiyeti olduğunu görmüş oldunuz.
            </li>
        </ul>
        <hr>
        <br>
        <h1 class="jumbotron-heading text-center">Uygulayalım</h1>
        <div class="col-md-auto mt-3 d-flex justify-content-center flex-column">
            <form method="GET" action="">
                <div class="d-flex justify-content-center">
                    <input class="form-control" type="text" placeholder="Enter" name="xss"
                           style="width: 500px;">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mt-4" style=" width: 500px;">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-auto d-flex justify-content-center" style="">
            <?php
            if ($_GET) {
                echo '<pre>';
                echo 'Hello ' . $_GET['xss'];
                echo '</pre>';

            } else {
                $isempty = true;
            }
            ?>
        </div>
    </div>
</section>

<?php require view('static/footer') ?>





