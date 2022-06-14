<?php require view('static/header') ?>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading text-center">Brute Force Nedir?</h1><br>
        <p style="text-align: justify">
            Brute Force(Kaba Kuvvet) kısaca birçok farklı parola deneyerek karşı tarafın parolasını bulmayı denemesidir.
            Bu saldırı için internet üzerinde çok fazla parola içeren listeler bulunmaktadır. Eğer karşı tarafın
            parolası bu listelerin içerisinde bulunan bir parola ise o hesaba başarılı şekilde giriş yapılabilir.
        </p>
        <hr>
        <br>
        <h1 class="jumbotron-heading text-center">Nasıl Sömürülür?</h1><br>
        <ul style="text-align: justify">
            <li>Aşağıda görünen formda kullanıcı adı ipucu olarak bizlere verilmiştir.</li>
            <li>Ek olarak bize verilen bruteforce.txt adlı dosyadan faydalanacağız.</li>
            <li>bruteforce.txt içerisinde çok az parola barındıran bir dosyadır.</li>
            <li>Bunun gibi çok daha fazla sayıda parola içeren dosyalar kolaylıkla bulunabilir. Örnek olarak kali linux içerisinde rockyou.txt dosyası bunlardan biridir.</li>
            <li>Kali Linux içerisinde yüklü olarak gelen burpsuite adlı uygulamamızı açalım.</li>
            <li>Bunun için browser'ımızda proxy ayarlarını http, 127.0.0.1 ve 8080 portu olarak değiştirmemiz gerekiyor. Firefox için foxyproxy eklentisi işimizi kolaylaştıracaktır.</li>
            <li>Daha sonra burpsite içerisinde proxy sekmesinde intercept özelliğini açmamız gerekiyor.</li>
            <li>Bu sayede sitede gönderdiğimiz istekleri burpsuite ile araya girip yakalayabilmekteyiz.</li>
            <li>Sitede kullanıcı adı olarak bruteforce ve parola olarak herhangi bir şey yazdıktan sonra burpsuite içerisinde bu isteğimizin yakalandığını görüyoruz.</li>
            <li>Sağ tıklayarak send to intruder diyerek yukarıda proxy'nin yanında bulunan intruder sekmesine gidelim.</li>
            <li>Burada arka planı yeşil olan parametreler bizim için önceden seçilen parametreler. Sağ taraftan clear diyerek hepsini kaldırabiliriz.</li>
            <li>Bizim için asıl önemli olan password parametresi olduğu için girdiğimiz parolayı seçip sağ taraftan add diyerek bu parametreye brute force uygulayacağımızı belirtiyoruz.</li>
            <li>Daha sonra payload sekmesinden bize verilen bruteforce.txt'yi yüklememiz gerekmekte.</li>
            <li>Son olarak sağ üst taraftan start attack diyerek atağımızı başlatıyoruz.</li>
            <li>Açılan pencerede tek tek parola denemelerinin yapıldığını görmekteyiz.</li>
            <li>Bu aşamada dikkat etmemiz gereken nokta length sekmesidir. Bu sekme siteden bize dönen cevabın uzunluğu göstermektedir.</li>
            <li>Uzunluklara baktığımızda bir parola hariç hepsinin aynı uzunlukta cevap döndürdüğünü görüyoruz.</li>
            <li>Farklı olan parolayı deneyerek sisteme giriş yapmayı deneyebiliriz.</li>
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
                    <input type="text" value="<?= post('username') ?>" class="form-control" name="username"
                           id="username" placeholder="bruteforce">
                </div>
                <div class="form-group">
                    <label for="password">Parola</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="*******">
                </div>
                <input type="hidden" name="submit" value="1">
                <button type="submit" class="btn btn-primary">Giriş Yap</button>
            </form>
        </div>
    </div>
</div>

<?php require view('static/footer') ?>





