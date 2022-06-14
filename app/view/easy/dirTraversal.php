<?php require view('static/header') ?>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading text-center">Directory Traversal Nedir?</h1><br>
        <p style="text-align: justify">
            Directroy traversal zafiyeti kullanıcı tarafından sağlanılan girdiler ile web sunucusu üzerinde erişilmemesi
            gereken dosyalara okuma veya yazma erişimi sağlanabilmesidir.
        </p>
        <hr>
        <br>
        <h1 class="jumbotron-heading text-center">Nasıl Sömürülür?</h1><br>
        <ul style="text-align: justify">
            <li>Bu sayfada bir arama alanı görmekteyiz.</li>
            <li>URL'e baktığımızda burada bir get isteği atıldığını görebilmekteyiz.</li>
            <li>Burada directory traversal zafiyetini yani sunucu dizinlerinde gezinmeyi deneyebiliriz.</li>
            <li>Bize verilen paramet ?word= ile başlıyor ve eşitliğin sağ tarafında girdiğimiz değer gelmektedir.</li>
            <li>O zaman girdi olarak dirtraversal.txt yazarak bir deneme yapalım.</li>
            <li>Gördülüğü gibi sunucuda bulunan bir dosyayı okuyabildik.</li>
            <li>Bir de ../../../../etc/passwd yazmayı deneyelim.</li>
            <li>Sunucuda bulunan etc/passwd dosyası okuyabildiğimizi gördük. Buradaki ../ işaretleri ile aslında bir
                dizin yukarıya çıkıyoruz ve etc/passwd dosyasının orada olduğunu görüyoruz.
            </li>
            <li>Ayrıca bu zafiyeti sömürmek için Command Injection sayfasından da faydalanıp dizin yapısını
                öğrenebiliriz.
            </li>
            <li>Girdi alanına app/config.php yazdığımızda sunucuda mevcut olduğunu fakat içeriğini bize göstermediğini
                fark ediyoruz. Bu tarz dosyaları okumak için php fonksiyonundan faydalanabiliriz.
            </li>
            <li>Girdi alanına php://filter/convert.base64-encode/resource=app/config.php yazdığımızda o dosyanın base64
                ile kodlanmış halini bize verdiğini görüyoruz.
            </li>
            <li>Daha sonra bu kodu kendi bilgisayarımızda base64.txt adlı bir dosyanın içerisine kopyalayıp, terminalden
                base64 -d base64.txt komutunu çalıştırdığımızda dosya içeriğini bize verdiğini görmekteyiz.
            </li>

        </ul>
    </div>
</section>
<div class="container">
    <div class="row justify-content-md-center mt-4">
        <div class="col-md-4">
            <form action="" method="get">
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
                    <input type="text" value="<?= $_GET['username'] ?>" class="form-control" name="word"
                           id="word" placeholder="Ara">
                </div>
                <!--                <input type="hidden" name="submit" value="1">-->
                <button type="submit" class="btn btn-primary">Ara</button>
            </form>
        </div>
    </div>
</div>

<?php require view('static/footer') ?>





