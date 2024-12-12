<?php


use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Chamando rotas organizadas
foreach (File::allFiles(__DIR__ . '/web') as $key => $route_file) {
    require $route_file->getPathname();
}

require __DIR__.'/auth.php';


