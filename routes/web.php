<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/detail', function () {
    $data = file_get_contents(__DIR__ . '/../public/foodie-rev.json');
    $json = json_decode($data, TRUE);
    foreach ($json as $d){
        $judul = $d['title'];
        $gambar = $d['picture_url'];
    }
    // $judul = $json[0]['title'];
    // $gambar = $json[0]['picture_url'];
    // $harga = $json[0]['base_price'];

    return view('detail', [
        'judul' => $judul,
        'gambar' => $gambar
        //'harga' => $harga
    ]);
});
