<?php

use App\Http\Controllers\NinjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/ninjas',function(){
//     $ninjas = [
//         ["name" => "mario", "skill"=>"75","id"=>"1"],
//         ["name"=>"luigi","skill"=>"75","id"=>"2"],
//         ["name"=>"adhvik","skill"=>"75","id"=>"3"],
//         ["name"=>"aathmika","skill"=>"75","id"=>"4"],
//     ];
//     return view('ninjas.index',["ninjas" => $ninjas]);
// });

//after adding controller
Route::get('/ninjas',[NinjaController::class,'index'])->name('ninjas.index');

// Route::get('/ninjas/create', function () {
//     return view('ninjas.create');
// });
Route::get('/ninjas/create',[NinjaController::class,'create'])->name('ninjas.create');

// Route::get('/ninjas/{id}',function($id){
//     return view('ninjas.show',["id" => $id]);
// });

Route::get('/ninjas/{id}',[NinjaController::class,'show'])->name('ninjas.show');
Route::post('/ninjas', [NinjaController::class, 'store'])->name('ninjas.store');