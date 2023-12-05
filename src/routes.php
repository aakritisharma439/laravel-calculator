<?php

Route::get('calculator',function(){
echo "This is my first package code.";
});

Route::get('add/{a}/{b}', 'LP\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'LP\Calculator\CalculatorController@subtract');
Route::get('multiply/{a}/{b}', 'LP\Calculator\CalculatorController@multiply');
Route::get('division/{a}/{b}', 'LP\Calculator\CalculatorController@division');
Route::get('fibonacci/{a}/{b}', 'LP\Calculator\CalculatorController@fibonacci');