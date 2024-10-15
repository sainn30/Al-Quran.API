<?php

use App\Http\Controllers\QuranController;
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
    return view('welcome');
});


// Route::get('/index', function () {
//     return view('index');
// });


//Quran =============================================
Route::get('/quran', [QuranController::class, 'index']);


Route::get('/quran/{id}', [QuranController::class, 'indexid']);
