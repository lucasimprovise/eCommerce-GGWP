<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FactureController;

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

//Route::get('/', function () {
 //  return view('welcome');
//});
/*Route::post('/login', [UserController::class,'login']);
Route::get('/', [ProductController::class,'index']);*/

Route::get('/login', function () {
    return view('login');

});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/');
});

Route::view('/register','register');
Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}", [ProductController::class,'detail']);
Route::get("search", [ProductController::class,'search']);
Route::post("add_to_cart", [ProductController::class,'addToCart']);
Route::get("cartfinal", [ProductController::class,'cartFinal']); // ne marche pas
Route::get("removecart/{id}", [ProductController::class,'removeCart']);
Route::get("ordernow", [ProductController::class,'orderNow']);
Route::get("orderplace", [ProductController::class,'orderPlace']);
Route::post("myorders", [ProductController::class,'myOrders']); // marche à moitié (n'affiche pas le récapitulatif de la commande)

Route::get('/send-email',[FactureController::class,'sendEmail']);
