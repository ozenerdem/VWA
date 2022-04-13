<?php

// tema değiştirme deneme bloğu
$themes = [];
foreach (glob(PATH . '/app/view/*/') as $folder) {
    $folder = explode('/', rtrim($folder, '/'));
    $themes[] = end($folder);
}

// tema değiştirme bloğu
// tema dışındaki diğer ayarlar 0lanıyor. Düzeltilecek!
if(isset($_POST['submit'])){
    $html = '<?php'.PHP_EOL.PHP_EOL;
    foreach (post('settings') as $key => $val ){
        $html .= '$settings["' . $key . '"] = "' . $val . '";' . PHP_EOL;
    }
    file_put_contents(PATH . '/app/settings.php', $html);
    header('Location:' . site_url('index'));
}


require view('index');

