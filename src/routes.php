<?php

use Illuminate\Support\Facades\Route;

Route::get('calculator',function(){
    echo "Hello World";
});

Route::get('add/{a}/{b}',[\Alamigr\Calculator\CalculatorController::class,'add']);
Route::get('substract/{a}/{b}',[\Alamgir\Calculator\CalculatorController::class,'substract']);