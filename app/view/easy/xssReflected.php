<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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

    <?php
    // silinecek
    //print_r($_SERVER);
    ?>
</div>

</body>
</html>