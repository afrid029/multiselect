<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

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
    $user = DB::table('details')->get();
    return view('welcome',compact('user'));
});
Route::patch('/save', [MyController::class,'update'])->name('save');
Route::Post('send',[MyController::class,'form']);
Route::get('edit/{c}',[MyController::class,'edit']);

