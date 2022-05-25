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


<?php require view('static/footer')?>





