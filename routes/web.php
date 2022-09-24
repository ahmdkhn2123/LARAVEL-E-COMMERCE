<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginUser;
use App\Http\Controllers\productC;


Route::get('logout',[productC::class,'logout']);
Route::view('login','login');
Route::POST('login',[LoginUser::class,'login']);
Route::get('/',[productC::class,'index']);
Route::get('detail/{id}',[productC::class,'detail']);
Route::POST('add_to_cart',[productC::class,'addtocart']);
Route::get('cartlist',[productC::class,'cartlist']);
Route::get('delete/{id}',[productC::class,'delete']);
Route::get('ordernow',[productC::class,'ordernow']);
Route::POST('orderplace',[productC::class,'orderplace']);
Route::get('myOrders',[productC::class,'myOrders']);




