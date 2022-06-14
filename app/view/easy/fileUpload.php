<?php require view('static/header') ?>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading text-center">File Upload Nedir?</h1><br>
        <p style="text-align: justify">
            File upload zafiyeti kısaca web uygulamaları üzerinde, dosya yükleme formlarında istenmeyen boyutta ve
            uzantıda dosya yükleyebilmektir. Bu zafiyet kullanıcıların sunucuya zararlı yazılım yükleyebilmesine olanak
            tanımaktadır.
        </p>
        <hr>
        <br>
        <h1 class="jumbotron-heading text-center">Nasıl Sömürülür?</h1><br>
        <ul style="text-align: justify">
            <li>Aşağıdaki formdan sisteme dosya yükleyebilmekteyiz.</li>
            <li>Normal şartlarda bu tarz formların amacına uygun şekilde filtrelenmesi gerekiyor.</li>
            <li>Örnek olarak profil fotoğrafı yüklememiz gereken bir alanda sadece jpeg ve png uzantıları kabul
                edilebilir ve üst limit olarak 1 MB kabul edilebilir.
            </li>
            <li>Fakat bu formda herhangi bir filtreleme uygulanmadığından sisteme istediğimiz uzantıda ve boyutta dosya
                yükleyebilmekteyiz.
            </li>
            <li>CTF'lerde bu tarz formlara genelde oluşturduğumuz shell dosyasını yükleyip reverse shell alarak
                sunucunun terminalini ele geçirmek hedeflenmektedir. Siz de bu tarz bir dosya oluşturarak sunucunun
                terminalini ele geçirmeyi hedefleyebilirsiniz..
            </li>
            <li>Daha fazlası için revereshell dosyası nasıl oluşturulur, netcat ile nasıl dinleme yapılır gibi konuları
                araştırabilirsiniz.
            </li>
        </ul>
    </div>
</section>
<div class="container">
    <h1 class="jumbotron-heading text-center">Uygulayalım</h1>
    <div class="col-md-auto mt-3 d-flex justify-content-center flex-column">
        <form action="" method="post" enctype="multipart/form-data">
            <?php if ($err = error()): ?>
                <div class="container w-50">
                    <div class="alert alert-danger" role="alert">
                        <?= $err ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($success = success()): ?>
                <div class="container w-50">
                    <div class="alert alert-success" role="alert">
                        <?= $success ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="container w-50">
                <div class="input-group mb-3">
                    <input type="file" class="form-control" name="fileUpload">
                    <input type="hidden" name="submit" value="1">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require view('static/footer') ?>





