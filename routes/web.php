<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PositionsController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AssetsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Kategori_tiketController;
use App\Http\Controllers\Detail_tiketController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\AgentController;

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


Route::get('/',[LoginController::class,'index']);
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/postLogin',[LoginController::class,'login']);

Route::get('/dashboard',[DashboardController::class,'index']);

Route::get('/user',[UserController::class,'index']);
Route::get('/user/tambah',[UserController::class,'create']);
Route::post('/user/simpan',[UserController::class,'store']);
Route::get('/user/{id}/edit',[UserController::class,'edit']);
Route::post('/user/{id}/update',[UserController::class,'update']);
Route::get('/user/{id}/hapus',[UserController::class,'destroy']);

Route::get('/position',[PositionsController::class,'index']);
Route::get('/position/tambah',[PositionsController::class,'create']);
Route::post('/position/simpan',[PositionsController::class,'store']);
Route::get('/position/{id}/edit',[PositionsController::class,'edit']);
Route::post('/position/{id}/update',[PositionsController::class,'update']);
Route::get('/position/{id}/hapus',[PositionsController::class,'destroy']);

Route::get('/location',[LocationsController::class,'index']);
Route::get('/location/tambah',[LocationsController::class,'create']);
Route::post('/location/simpan',[LocationsController::class,'store']);
Route::get('/location/{id}/edit',[LocationsController::class,'edit']);
Route::post('/location/{id}/update',[LocationsController::class,'update']);
Route::get('/location/{id}/hapus',[LocationsController::class,'destroy']);

Route::get('/kategori',[KategoriController::class,'index']);
Route::get('/kategori/tambah',[KategoriController::class,'create']);
Route::post('/kategori/simpan',[KategoriController::class,'store']);
Route::get('/kategori/{id}/edit',[KategoriController::class,'edit']);
Route::post('/kategori/{id}/update',[KategoriController::class,'update']);
Route::get('/kategori/{id}/hapus',[KategoriController::class,'destroy']);

Route::get('/asset',[AssetsController::class,'index']);
Route::get('/asset/tambah',[AssetsController::class,'create']);
Route::post('/asset/simpan',[AssetsController::class,'store']);
Route::get('/asset/{id}/edit',[AssetsController::class,'edit']);
Route::post('/asset/{id}/update',[AssetsController::class,'update']);
Route::get('/asset/{id}/hapus',[AssetsController::class,'destroy']);

Route::get('/client',[ClientController::class,'index']);
Route::get('/client/tambah',[ClientController::class,'create']);
Route::post('/client/simpan',[ClientController::class,'store']);
Route::get('/client/{id}/edit',[ClientController::class,'edit']);
Route::post('/client/{id}/update',[ClientController::class,'update']);
Route::get('/client/{id}/hapus',[ClientController::class,'destroy']);

Route::get('/k_ticket',[Kategori_tiketController::class,'index']);
Route::get('/k_ticket/tambah',[Kategori_tiketController::class,'create']);
Route::post('/k_ticket/simpan',[Kategori_tiketController::class,'store']);
Route::get('/k_ticket/{id}/edit',[Kategori_tiketController::class,'edit']);
Route::post('/k_ticket/{id}/update',[Kategori_tiketController::class,'update']);
Route::get('/k_ticket/{id}/hapus',[Kategori_tiketController::class,'destroy']);

Route::get('/detail_ticket',[Detail_tiketController::class,'index']);
Route::get('/detail_ticket/tambah',[Detail_tiketController::class,'create']);
Route::post('/detail_ticket/simpan',[Detail_tiketController::class,'store']);
Route::get('/detail_ticket/{id}/edit',[Detail_tiketController::class,'edit']);
Route::post('/detail_ticket/{id}/update',[Detail_tiketController::class,'update']);
Route::get('/detail_ticket/{id}/hapus',[Detail_tiketController::class,'destroy']);

Route::get('/ticket',[TicketsController::class,'index']);
Route::get('/ticket/tambah',[TicketsController::class,'create']);
Route::post('/ticket/simpan',[TicketsController::class,'store']);
Route::get('/ticket/{id}/edit',[TicketsController::class,'edit']);
Route::post('/ticket/{id}/update',[TicketsController::class,'update']);
Route::get('/ticket/{id}/hapus',[TicketsController::class,'destroy']);

Route::get('/comment',[CommentsController::class,'index']);
Route::get('/comment/tambah',[CommentsController::class,'create']);
Route::post('/comment/simpan',[CommentsController::class,'store']);
Route::get('/comment/{id}/edit',[CommentsController::class,'edit']);
Route::post('/comment/{id}/update',[CommentsController::class,'update']);
Route::get('/comment/{id}/hapus',[CommentsController::class,'destroy']);

Route::get('/agent',[AgentController::class,'index']);
Route::get('/agent/tambah',[AgentController::class,'create']);
Route::post('/agent/simpan',[AgentController::class,'store']);
Route::get('/agent/{id}/edit',[AgentController::class,'edit']);
Route::post('/agent/{id}/update',[AgentController::class,'update']);
Route::get('/agent/{id}/hapus',[AgentController::class,'destroy']);
