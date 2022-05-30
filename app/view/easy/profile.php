<?php require view('static/header')?>

<!--<section class="jumbotron text-center">-->
<!--    <div class="container">-->
<!--        <h1 class="jumbotron-heading">--><?//=setting('welcome_title')?><!--</h1>-->
<!--        <p class="lead text-muted">--><?//=setting('welcome_text')?><!--</p>-->
<!--        <p>-->
<!--            <a href="--><?//=site_url('contact')?><!--" class="btn btn-primary my-2">İletişime Geç</a>-->
<!--        </p>-->
<!--    </div>-->
<!--</section>-->
<div class="container">
    <div class="card m-5">
        <div class="card-body">
            <img src="<?=public_url('images/profile.jpeg')?>" class="rounded-circle mx-auto d-block mt-2" style="max-width: 10%;" alt="Cinque Terre">

            <h4 class="card-title">Erdem Ozen</h4>
            <p class="card-text"><b>User Rank:</b> PRO</p>
            <form action="">
                <div class="mb-3 mt-3">
                    <label for="comment"><b>Bio:</b></label>
                    <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                </div>
                <button type="submit" class="btn btn-outline-primary d-flex justify-content-end">Update Bio</button>

            </form>
            <button type="submit" class="btn btn-outline-secondary d-flex justify-content-end my-3"><a href="<?=site_url('csrf')?>">Change Password</a></button>
        </div>
    </div>
</div>



<?php require view('static/footer')?>





