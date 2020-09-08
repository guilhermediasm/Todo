<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("tasks", "TasksController@index");
Route::get("tasks/{tasks}", "TasksController@show");
Route::post("tasks", "TasksController@store");
Route::patch("tasks/{tasks}", "TasksController@update");
Route::delete("tasks/{tasks}", "TasksController@destroy");