<?php require view('static/header')?>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">XSS Reflected</h1>
        <div class="col-md-auto mt-3 d-flex justify-content-center flex-column">
            <form method="GET" action="">
                <div class="d-flex justify-content-center">
                    <input class="form-control" type="text" placeholder="Enter" name="xss"
                           style="width: 500px;">
                </div>
                <button type="submit" class="btn btn-primary mt-4" style=" width: 500px;">Submit</button>
            </form>
        </div>
        <div class="col-md-auto d-flex justify-content-center" style="">
            <?php
            if($_GET){
                echo '<pre>';
                echo 'Hello ' . $_GET['xss'];
                echo '</pre>';

            }else{
                $isempty = true;
            }
            ?>
        </div>
    </div>
</section>
<div class="container">
    <div class="row pb-2">
        <div class="col-md-12">
            <h4 class="pb-3">Neler yapıyorum?</h4>
        </div>
        <div class="col-md col-12 pb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">PSD/Sketch to HTML</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Front-end Developer</h6>
                    <p class="card-text">Photoshop ya da .sketch dosyalarınızı gönderin, html5/css3 kodlanmış şekilde
                        geri alın.</p>
                    <a href="#" class="btn btn-sm btn-danger">Referanslara Gözat <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md col-12 pb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Web Yazılım</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Back-end Developer</h6>
                    <p class="card-text">Projelerinize hayat verip dinamiklik katıyorum. Yazılım dili olarak PHP
                        kullanıyorum.</p>
                    <a href="#" class="btn btn-sm btn-primary">Referanslara Gözat <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md col-12 pb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mobil Uygulama</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Mobile Developer</h6>
                    <p class="card-text">Native değil ama hybrid olarak istediğin projenin mobil uygulamasını yazıyorum.
                        İster react ister cordova.</p>
                    <a href="#" class="btn btn-sm btn-dark">Referanslara Gözat <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require view('static/footer')?>





