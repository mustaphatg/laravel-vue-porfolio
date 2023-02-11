<?php

use Illuminate\Support\Facades\Route;

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




Auth::routes();

Route::middleware(['auth'])->group(function(){

    
    Route::prefix('admin')->group(function(){


        Route::get('/', "MustyController@projects")->name('all_projects');

        Route::get('/add', "MustyController@add_project")->name('add_project');

        Route::post('/store', "MustyController@store_project")->name('store_project');

        // delete
        Route::get('/delete/{id}', "MustyController@delete_project")->name('delete_project');
        
        // edit
        Route::get('/edit/{id}', "MustyController@edit_project")->name('edit_project');

        // update
        Route::post('/update', "MustyController@update_project")->name('update_project');


    });

});



Route::get('{uri}','\\'.Pallares\LaravelNuxt\Controllers\NuxtController::class
)->where('uri', '.*');

