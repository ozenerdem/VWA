<?php require view('static/header') ?>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Command Injection Nedir?</h1><br>
        <p style="text-align: justify">
            Güncel olarak 2021 yılında yayınlanan OWASP Top 10 listesinde Injection başlığı altında yer alan zafiyet
            çeşitlerinden birisidir. Web uygulaması üzerinde kullanıcıdan girdi (input) alınan her yerde bulunma
            olasılığı yüksektir. Kullanıcının, girdiği verinin yanında ek olarak Linux veya Windows komutlarından
            herhangi birini çalıştırabilmesi zafiyetin bulunduğunu göstermektedir. Örnek olarak; dosya ekleme, silme,
            değiştirme ve uzaktan erişim sağlama gibi komutlar sömürme esnasında kullanılabilir.
        </p>
        <hr>
        <br>
        <h1 class="jumbotron-heading">Nasıl Sömürülür</h1>
        <br>
        <ul style="text-align: justify">
            <li>Aşağıda bulunan girdi alanına ilgili IP adresini girmeniz istenmektedir. Zafiyete ait açıklığın bulunup
                bulunmadığını kontrol etmek amacıyla gireceğiniz değerin yanında ek olarak sistem komutlarını da
                ekleyerek denemelere başlayınız.
            </li>
            <li>Örneğin IP adresi: 8.8.8.8 olan kullanıcı için 8.8.8.8;ls komutunu girerek ping atabilirsiniz. Burada
                açıklık bulunduğundan dolayı ";" ile diğer komut kümesine geçilebilmektedir.
            </li>
            <li>Arka planda girdi alanına yönelik filtrelemeler bulunmadığından ping atılırken aynı zamanda girilen
                sistem komutu ile lokalde yer alan dosyalara da ulaşılabilmektedir.
            </li>
            <li>Command Injection ile sayfa içerisinde bulunan girdi alanlarını kullanarak sistem komutlarını
                çalıştırabilir ve normalde göremediğiniz bilgilere erişebilirsiniz.
            </li>
        </ul>
        <div class="col-md-auto mt-3 d-flex justify-content-center flex-column">
            <form method="POST">
                <div class="d-flex justify-content-center">
                    <input class="form-control" type="text" placeholder="Enter an ip address" name="ip"
                           style="width: 500px;">
                </div>
                <button type="submit" class="btn btn-primary mt-4" style=" width: 500px;">Ping</button>
            </form>
        </div>

        <div class="col-md-auto d-flex justify-content-center" style="">
            <?php
            if (isset($_POST["ip"])) {
                $input = $_POST["ip"];
                echo "<br /><br />";
                exec("ping -c3 $input", $output);
                if (!empty($output)) {

                    echo '<div class="mt-5 alert alert-primary" role="alert" style=" width:500px;" > <strong>  <p style="text-align:center;">';
                    foreach ($output as $line) {
                        echo $line;
                        echo "<br>";
                    }
                    echo ' </p></strong></div>';
                }
            }
            ?>
        </div>
    </div>
</section>


<?php require view('static/footer') ?>





