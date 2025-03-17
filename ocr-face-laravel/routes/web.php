<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cek-wajah', function () {
    $response = Http::get('http://127.0.0.1:5000/detect_faces');
    return $response->json();
});

Route::get('/deteksi-wajah', function () {
    return view('deteksi');
});