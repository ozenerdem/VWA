<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Command Injection</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div style="margin:15%">
        <div class="d-flex justify-content-center">
            <h1>SEZI</h1>
        </div>
        <div class="d-flex justify-content-center">
            <h2>Welcome To The Command Injection Site!</h2>
        </div>
        <div class="d-flex justify-content-center">
            <div class="container text-center">

                <div class="header-wrapper">
                    <h2 class="col">PING</h2>
                </div>
                <div class="col-md-auto mt-3 d-flex justify-content-center flex-column">
                    <form method="POST">
                        <div class="d-flex justify-content-center">
                            <input class="form-control" type="text" placeholder="Enter an ip address" name="ip" style="width: 500px;">
                        </div>
                        <button type="submit" class="btn btn-primary mt-4" style=" width: 500px;">Ping</button>
                    </form>
                    <form action="pingmed.php">
                        <button type="submit" class="btn btn-primary mt-4" style=" width: 500px;">Med</button>
                    </form>


                </div>

                <div class="col-md-auto d-flex justify-content-center">

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
        </div>
    </div>
</body>

</html>