<?php
//
//require __DIR__ . '/app/init.php';
//
//$route = array_filter(explode('/', $_SERVER['REQUEST_URI']));
//$getRoute = explode('?', $route[2]); // farklı klasörler geldiğinde url'e göre yeniden düzenlenecek.
//
//if(SUBFOLDER === true){
//    array_shift($route);
//}
//
//if(!route(0)){
//    $route[0] = 'index';
//}
//// 404'e yönlendirmede bir problem var.
//if(!file_exists(controller(route(0))) AND !$_SERVER['QUERY_STRING'] AND (!$getRoute[0] OR $getRoute[0] == NULL)){
//    $route[0] = '404';
//}
//
//// Bakım Modu Yönlendirmede hata var.
//if(setting('maintenance_mode') == 1 && route(0) != 'admin'){
//    $route[0] = 'maintenance_mode';
//}
//
//if(!$_GET AND ($getRoute[0] == "" OR $getRoute[0] == NULL) OR $route[0] == '404' ){
//    require controller(route(0));
//}else{
//    require controller($getRoute[0]);
//}


require __DIR__ . '/app/init.php';

$routeExplode = explode('?', $_SERVER['REQUEST_URI']);
$route = array_filter(explode('/', $routeExplode[0]));
if (SUBFOLDER === true){
    array_shift($route);
}

if (!route(0)){
    $route[0] = 'index';
}

if (!file_exists(controller(route(0)))){
    $route[0] = '404';
}

if (setting('maintenance_mode') == 1 && route(0) != 'admin'){
    $route[0] = 'maintenance-mode';
}



require controller(route(0));
