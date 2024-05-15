<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view("homepage");
})->name("homepage");

Route::get('/dashboard', function () {
    $user = [
        "username" => "Bayu Rizki",
        "kelas" => "fullstack"
    ];
    return view("dashboard", $user);
})->name("dashboard");

Route::get('/tugas', function (Request $request) {
    return view("tugas");
})->name("tugasMenu");

Route::get('/kelompok', function (Request $request) {
    return view("kelompok.kelompokIndex");
})->name("kelompokIndex");

Route::get('/kelompok/{kelompokId}', function ($kelompokId) {
    return view("");
});

Route::get('/pengaturan', function () {
    return view('userSettings');
})->name("userSettings");