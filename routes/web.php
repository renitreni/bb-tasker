<?php

use App\Http\Controllers\PpdfViewController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('filament.admin.auth.login');
});

Route::get('/accomplishment', [PpdfViewController::class, 'accomplishment'])->name('accomplishment');

Route::get('/accomplishment-render', function () {
    return view('accomplishment');
});