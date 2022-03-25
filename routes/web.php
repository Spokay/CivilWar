<?php
session_start();
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ControllerCRUD;
use App\Http\Controllers\ControllerPartie;
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
    return view('layout');
});
Route::get('/personnages', [ControllerCRUD::class, 'getList']);
Route::get('/personnageDetails', [ControllerCRUD::class, 'show']);
Route::get('/nouvellePartie', [ControllerPartie::class, 'index']);
Route::post('/partie', [ControllerPartie::class, 'initialiserPartie']);
Route::get('/commencerPartie', [ControllerPartie::class, 'commencerPartie']);
//Route::post('/afficherDetailsPersonnage', [ControllerCRUD::class, 'getOne']);
