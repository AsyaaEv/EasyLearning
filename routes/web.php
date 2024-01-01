<?php

use App\Http\Controllers\addMateriController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::view('/', 'posts.index');
Route::view('/kategori', 'posts.kategori');
Route::view('/dashboard', 'posts.list');
Route::view('/dashboard/add', 'posts.kategoriadd');
Route::get('/dashboard/detail/{id}', function($id){
    return view('posts.detail', ['id' => $id]);
});
Route::get('/dashboard/materi/add', [addMateriController::class, 'index']);
Route::get('/dashboard/materi/edit/{id}', [addMateriController::class, 'edit']);
Route::post('/dashboard/materi/edit/proses/{id}', [addMateriController::class, 'update']);
Route::post('/dashboard/materi/add/proses', [addMateriController::class, 'store']);
Route::get('/dashboard/materi/delete/{id}',[addMateriController::class,'destroy']);
Route::get('/mapel/{id}', function($id){
    return view('posts.mapel', ['id' => $id]);
});
Route::get('/mapel/detail/{id}', function($id){
    return view('posts.mapeldetail', ['id' => $id]);
});
Route::get('/dashboard/kategori/edit/{id}', function($id){
    return view('posts.kategoriedit', ['id' => $id]);
});
Route::get('/dashboard/kategori/delete/{id}', function($id){
    return view('posts.kategoridelete', ['id' => $id]);
});
