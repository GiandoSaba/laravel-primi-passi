<?php

use Faker\Guesser\Name;
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
    $data = [
        'headerLink' => [
            [
                'name' => 'Home',
                'href' => '/',
            ],
            [
                'name' => 'Contatti',
                'href' => '/contatti',
            ],
            [
                'name' => 'Info',
                'href' => '/info',
            ],
            [
                'name' => 'Acquista Ora',
                'href' => '/buy',
            ]
        ]
    ];
    return view('home', $data);
});

Route::get('/contatti', function () {
    return view('contatti');
});
Route::get('/info', function () {
    return view('info');
});
Route::get('/buy', function () {
    return view('buy');
});
