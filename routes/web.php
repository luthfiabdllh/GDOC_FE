<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    $files = File::files(public_path('assets/products'));
    return view('index', ['files' => $files]);
});
