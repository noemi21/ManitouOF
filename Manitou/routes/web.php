<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PublicController::class , 'home'])->name('home');
Route::get ('/home/soluzioni/le-nostre-macchine-m1' , [PublicController::class , 'macchine'])->name('macchine');
Route::get ('/home/soluzioni/le-nostre-macchine-m2' , [PublicController::class , 'macchine2'])->name('macchine2');
Route::get ('/home/soluzioni/le-nostre-macchine-m1/MRT-2660' , [PublicController::class , 'macchina1'])->name('macchina1');
Route::get ('/home/soluzioni/le-nostre-macchine-m1/MRT-2545-115' , [PublicController::class , 'macchina2'])->name('macchina2');
Route::get ('/home/soluzioni/le-nostre-macchine-m2/MT-625-H' , [PublicController::class , 'macchina3'])->name('macchina3');
Route::get ('/home/soluzioni/le-nostre-macchine-m2/MI-30-D-ST5' , [PublicController::class , 'macchina4'])->name('macchina4');
Route::get ('/home/soluzioni/le-nostre-macchine-m2/MLT-940-140-V+' , [PublicController::class , 'macchina5'])->name('macchina5');
Route::get ('/home/soluzioni/le-nostre-macchine-m1/MRT-1845-115' , [PublicController::class , 'macchina6'])->name('macchina6');
Route::get ('/home/soluzioni/le-nostre-macchine-m2/MT-1335-HA-75D-ST5' , [PublicController::class , 'macchina7'])->name('macchina7');
Route::get ('/home/soluzioni/le-nostre-macchine-m2/ES-112-EASY' , [PublicController::class , 'macchina8'])->name('macchina8');
Route::get ('/home/soluzioni/le-nostre-macchine-m2/EP-20-EASY' , [PublicController::class , 'macchina9'])->name('macchina9');
Route::get ('/home/soluzioni/le-nostre-macchine-usato/Hyster 4.00' , [PublicController::class , 'usato1'])->name('usato1');
Route::get ('/home/soluzioni/le-nostre-macchine-usato/EP 16 EASY' , [PublicController::class , 'offerta1'])->name('offerta1');
Route::get ('/home/soluzioni/i-nostri-servizi' , [PublicController::class , 'servizi'])->name('servizi');
Route::get ('/home/chi-siamo' , [PublicController::class , 'chiSiamo'])->name('chiSiamo');
Route::get ('/home/contatti' , [PublicController::class , 'contatti'])->name('contatti');

Route::post('/contact/create' , [PublicController::class , 'contactCreate'])->name('contact.create');
