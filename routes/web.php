<?php

use App\Http\Controllers\ContactConntroller;
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [MyController::class, 'take1'])->name('acceuil');
Route::get('contacts', [ContactConntroller::class, 'create'])->name('contacts');
Route::post('contacts', [ContactConntroller::class, 'store'])->name('contacts.store');


Route::get('/dashboard', function () {
    if (Auth::user()->plaignant_id != null) {
        return view('Dashboard.plaignant');
    } elseif (Auth::user()->procureur_id != null) {
        return view('Dashboard.procureur');
    } elseif (Auth::user()->bureau_penal_id != null) {
        return view('Dashboard.bop');
    } elseif (Auth::user()->officiers_police_id != null) {
        return view('Dashboard.opj');
    } else {
        return view('dashboard');
    }
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
