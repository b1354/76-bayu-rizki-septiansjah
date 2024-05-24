<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view("pages.homepage");
})->name("homepage");

Route::get('/dashboard', function () {
    $user = [
        "username" => "Bayu Rizki",
        "kelas" => "fullstack"
    ];
    return view("pages.dashboard", $user);
})->name("dashboard");

Route::get('/tugas', function (Request $request) {
    return view("pages.tugas");
})->name("tugasMenu");

Route::get('/kelompok', function (Request $request) {
    return view("pages.kelompok.kelompokIndex");
})->name("kelompokIndex");

Route::get('/kelompok/{kelompokId}', function ($kelompokId) {
    return view("");
});

Route::get('/pengaturan', function () {
    return view('pages.userSettings');
})->name("userSettings");