<?php


////error handler function
//function customError($errno, $errstr)
//{
//    echo "<b>Error:</b> [$errno] $errstr";
//}
//
////set error handler
//set_error_handler("customError");
//set_error_handler();
//
////trigger error
//echo($test);


////create function with an exception
//function checkNum($number) {
//
//}
//
////trigger exception in a "try" block
//try {
//
//    //If the exception is thrown, this text will not be shown
//    echo 'If you see this, the number is 1 or below';
//}
//
////catch exception
//catch(Exception $e) {
//    echo 'Message: ' .$e->getMessage();
//}

$meta = [
    'title' => setting('title'),
    'description' => setting('description'),
    'keywords' => setting('keywords')
];
// tema değiştirme deneme bloğu
$themes = [];
foreach (glob(PATH . '/app/view/*/') as $folder) {
    $folder = explode('/', rtrim($folder, '/'));
    $themes[] = end($folder);
}

// tema değiştirme bloğu
// tema dışındaki diğer ayarlar 0lanıyor. Düzeltilecek!
if (isset($_POST['submit'])) {
    $html = '<?php' . PHP_EOL . PHP_EOL;
    foreach (post('settings') as $key => $val) {
        $html .= '$settings["' . $key . '"] = "' . $val . '";' . PHP_EOL;
    }
    file_put_contents(PATH . '/app/settings.php', $html);
    header('Location:' . site_url('index'));
}

require view('index');

