<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $array = [
        'name' => 'Laravel',
        'version' => '11',
        'features' => ['Blade', 'Eloquent', 'Routing']];
    return view('welcome', ['name'=>'Samia'] , compact('array'));
});
