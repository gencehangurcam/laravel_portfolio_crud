<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\WorkController;
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

Route::get('/',[FrontController::class, "index"])->name("home");

//ABOUT CONTROLLER ///////////--------------
//////////////--------------

Route::get('/admin', [AboutController::class, 'index'])->name("admin");

//POST METHOD without CREATE page because the forms is in HOME page.
Route::post('/admin/about/store',[AboutController::class,'store'])->name('about.store');

//DELETE METHOD
Route::delete('/{id}/destroy',[AboutController::class,'destroy'])->name("about.destroy");

//upadte edit
Route::get("/{id}/edit",[AboutController::class,"edit"])->name("about.edit");
Route::put("/{id}/update",[AboutController::class,"update"])->name("about.update");


//Services Controller //////////////
//////-------------------------

//POST METHOD without CREATE page because the forms is in HOME page.
Route::post('/admin/services/store',[ServicesController::class,'store'])->name('services.store');


//DELETE METHOD
Route::delete('/admin/services/{id}/destroy',[ServicesController::class,'destroy'])->name("services.destroy");

//upadte edit
Route::get("/admin/services/{id}/edit",[ServicesController::class,"edit"])->name("services.edit");
Route::put("/admin/services/{id}/update",[ServicesController::class,"update"])->name("services.update");

//Work Controller //////////////////////
//------------------------------

//POST METHOD without CREATE page because the forms is in HOME page.
Route::post('/admin/work/store',[WorkController::class,'store'])->name('work.store');


//DELETE METHOD
Route::delete('/admin/work/{id}/destroy',[WorkController::class,'destroy'])->name("work.destroy");

//upadte edit
Route::get("/admin/work/{id}/edit",[WorkController::class,"edit"])->name("work.edit");
Route::put("/admin/work/{id}/update",[WorkController::class,"update"])->name("work.update");



//Contact Controller //////////////////////
//------------------------------

//POST METHOD without CREATE page because the forms is in HOME page.
Route::post('/admin/contact/store',[ContactController::class,'store'])->name('contact.store');

//SHOW METHOD
Route::get('/{id}/show', [ContactController::class, 'show'])->name('contact.show');

//DELETE METHOD
Route::delete('/admin/contact/{id}/destroy',[ContactController::class,'destroy'])->name("contact.destroy");

