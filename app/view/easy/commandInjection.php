<?php require view('static/header')?>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Command Injection</h1>
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
            <!--            backend kısmı değiştirilecek    -->
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


<?php require view('static/footer')?>





