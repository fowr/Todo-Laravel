<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('todos', 'TodosController@index');

Route::get('todos/{todo_id}/complete' , 'TodosController@complete');

Route::get('todos/{todo_id}','TodosController@show');

Route::get('todos/{todo_id}/edit','TodosController@edit_page');

Route::post('edit/{todo_id}','TodosController@update');

Route::get('todos/{todo_id}/delete','TodosController@delete');

Route::get('create','TodosController@create');

Route::post('create-todo','TodosController@create_todo');

