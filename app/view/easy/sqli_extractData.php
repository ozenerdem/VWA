<?php require view('static/header') ?>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading text-center">SQL Injection Nedir?</h1><br>
        <p>
            Güncel olarak 2021 yılında yayınlanan OWASP Top 10 listesinde Injection başlığı altında yer alan zafiyet
            çeşitlerinden birisidir. Web uygulaması üzerinde kullanıcıdan girdi (input) alınan her yerde bulunma
            olasılığı yüksektir. Kullanıcının, girdiği verinin yanında ek olarak SQL sorgusu çalıştırabilmesi
            zafiyetin bulunduğunu göstermektedir. Bypass Authentication'dan farklı olarak burada sorgudan dönen
            cevapları da okuyabiliyoruz.
        </p>
        <hr>
        <br>
        <h1 class="jumbotron-heading text-center">Nasıl Sömürülür?</h1><br>
        <ul style="text-align: justify">
            <li>Aşağıdaki girdi alanına kullanıcı adı yazarak kullanıcı bilgilerini görüntüleyebiliriz.</li>
            <li>Bu formda Bypass Authentication'dan farklı olarak bize sonuç döndürdüğünü görebiliyoruz.</li>
            <li>Bunun için Union komutundan faydalanarak arka planda çalışan sorguya kendi sorgularımızı eklemeye çalışacağız.</li>
            <li>Burada dikkat etmemiz gereken nokta; union select dedikten sonra vereceğimiz sütun sayısı ile arka planda çalışan tablonun sütun sayısı aynı olmalıdır.</li>
            <li>Bunu önceden kestirebilmek imkansız olduğundan dolayı burada deneme yanılma yoluya bulmamız gerekmektedir.</li>
            <li>1' union select 1# &nbsp; 1' union select 1,2# &nbsp; 1' union select 1,2,3#</li>
            <li>Bu şekilde denemeler yaptığımızda 1' union select 1,2,3,4,5,6,7# sorgusunun bize sonuç döndürdüğünü görüyoruz.</li>
            <li>Bu aşamadan sonra 2 ve 3 ile belirttiğimiz yere version(), database(), user() gibi fonksiyonları yazarsak veritabanı ile ilgili bilgileri elde ettiğimiz görüyoruz.</li>
            <li>Daha sonra 1' union select 1,table_name,3,4,5,6,7 from information_schema.tables#  bu sorgu ile veritabanında bulunan tüm tabloları listeleyebiliriyoruz.</li>
            <li>İlk sorgumuzda database() yazarakta elde ettiğimiz sezi adlı veritabanından tabloları şu sorguyla elde edebiliriz. 1' union select 1,table_name,3,4,5,6,7 from information_schema.tables where table_schema = 'sezi'#</li>
            <li>Listenenen tablolardan herhangi birini seçip onun kolonlarına şu sorguyla erişebiliriz. 1' union select 1,column_name,3,4,5,6,7 from information_schema.columns where table_name = 'users'#</li>
            <li>Bu örnekte users tablosunu seçtiğimizi varsaydık ve users tablosundaki tüm kolonlara eriştik. Daha sonra burada en çok dikkat çeken bilgiler username ve password bilgileri olduğu için onları elde etmeye çalışalım.</li>
            <li>Bu sorguyla birlikte veritabanındaki tüm kullanıcı adı ve parolalarını elde edebildiğimiz görüyoruz. 1' union select 1,user_name,user_password,4,5,6,7 from users#</li>
            <li>Bu sorgular üstünde değişiklikler yaparak istediğimiz veritabanı ve tablodan istediğimiz bilgileri çekebilmekteyiz.</li>
            <li>Daha fazlası için manuel yaptığımız bu işlemleri otomatik yapan sqlmap adlı programı inceleyebilirsiniz.</li>
        </ul>
    </div>
</section>
<div class="container">
    <div class="row justify-content-md-center mt-4">
        <div class="col-md-4">
            <form action="" method="get">
                <h3 class="mb-3">Uygulayalım</h3>
<!--                <h3 class="mb-3">Bilgilerinizi görmek için kullanıcı adınızı giriniz.</h3>-->
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
                    <input type="text" value="<?= $_GET['username'] ?>" class="form-control" name="username"
                           id="username" placeholder="Kullanıcı adınızı yazın..">
                </div>
                <input type="hidden" name="submit" value="1">
                <button type="submit" class="btn btn-primary">Bilgileri Getir</button>
                <?php if ($query):
                    while ($row = $query->fetch(PDO::FETCH_ASSOC)){ ?>
                    <div class="alert alert-success my-3" role="alert">
                        <p>username: <?=$row['user_name'];?></p>
                        <p>userurl: <?=$row['user_url'];?></p>
                        <p>userrole: <?=user_ranks($row['user_rank']); ?></p>
                    </div>
                <?php }endif; ?>

            </form>
        </div>
    </div>
</div>

<?php require view('static/footer') ?>





