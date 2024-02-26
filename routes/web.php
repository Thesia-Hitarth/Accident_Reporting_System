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
    return view('Index.login');
});

Auth::routes();

Route::get('/index', function () {
    return view('Index.index');
});

// Hospital

Route::any('/hospital', [App\Http\Controllers\HomeController::class, 'listhospital']);

Route::get('/add_hospital', function () {
    return view('Hospital.add_hospital');
});

Route::get('/modify_hospital', function () {
    return view('Hospital.modify_hospital');
});



Route::get('/modify_hospital/{id}', [App\Http\Controllers\HomeController::class, 'modifyhospital']); //css not appearing
/*Route::any('/modify_hospital', [App\Http\Controllers\HomeController::class, 'modifyhospital']);*///Particular for button

Route::any('/modify_hospitalaction', [App\Http\Controllers\HomeController::class, 'modifyhospitalaction']);


Route::any('/remove_hospital/{id}', [App\Http\Controllers\HomeController::class, 'removehospital']);


Route::any('/hospital', [App\Http\Controllers\HomeController::class, 'listhospital']);

Route::any('/add_hospitalaction', [App\Http\Controllers\HomeController::class, 'addhospital']);

// Pstation

//Route::any('/pstation', [App\Http\Controllers\HomeController::class, 'listpstation']);

/*Route::get('/pstation', function () {
    return view('Pstation.pstation');
});*/

Route::get('/add_pstation', function () {
    return view('Pstation.add_pstation');
});

Route::get('/modify_pstation', function () {
    return view('Pstation.modify_pstation');
});



Route::get('/modify_pstation/{id}', [App\Http\Controllers\HomeController::class, 'modifypstation']); //css not appearing
/*Route::any('/modify_pstation', [App\Http\Controllers\HomeController::class, 'modifypstation']);*///Particular for button

Route::any('/modify_pstationaction', [App\Http\Controllers\HomeController::class, 'modifypstationaction']);


Route::any('/remove_pstation/{id}', [App\Http\Controllers\HomeController::class, 'removepstation']);


Route::any('/pstation', [App\Http\Controllers\HomeController::class, 'listpstation']);

Route::any('/add_pstationaction', [App\Http\Controllers\HomeController::class, 'addpstation']);


// Fstation

Route::any('/fstation', [App\Http\Controllers\HomeController::class, 'listfstation']);

/*Route::get('/fstation', function () {
    return view('fstation.fstation');
});*/

Route::get('/add_fstation', function () {
    return view('Fstation.add_fstation');
});

Route::get('/modify_fstation', function () {
    return view('Fstation.modify_fstation');
});



Route::get('/modify_fstation/{id}', [App\Http\Controllers\HomeController::class, 'modifyfstation']); //css not appearing
/*Route::any('/modify_fstation', [App\Http\Controllers\HomeController::class, 'modifyfstation']);*///Particular for button

Route::any('/modify_fstationaction', [App\Http\Controllers\HomeController::class, 'modifyfstationaction']);


Route::any('/remove_fstation/{id}', [App\Http\Controllers\HomeController::class, 'removefstation']);


Route::any('/fstation', [App\Http\Controllers\HomeController::class, 'listfstation']);

Route::any('/add_fstationaction', [App\Http\Controllers\HomeController::class, 'addfstation']);


// accident

Route::any('/accident', [App\Http\Controllers\HomeController::class, 'listaccident']);

/*Route::get('/accident', function () {
    return view('Accident.accident');
});*/

Route::get('/add_accident', function () {
    return view('Accident.add_accident');
});

Route::get('/modify_accident', function () {
    return view('Accident.modify_accident');
});



Route::get('/modify_accident/{id}', [App\Http\Controllers\HomeController::class, 'modifyaccident']); //css not appearing
/*Route::any('/modify_accident', [App\Http\Controllers\HomeController::class, 'modifyaccident']);*///Particular for button

Route::any('/modify_accidentaction', [App\Http\Controllers\HomeController::class, 'modifyaccidentaction']);


Route::any('/remove_accident/{id}', [App\Http\Controllers\HomeController::class, 'removeaccident']);


Route::any('/accident', [App\Http\Controllers\HomeController::class, 'listaccident']);

Route::any('/add_accidentaction', [App\Http\Controllers\HomeController::class, 'addaccident']);


Route::any('/log', [App\Http\Controllers\logController::class, 'temp'])->name('log');

Route::any('/testajax', [App\Http\Controllers\HomeController::class, 'testingajax']);