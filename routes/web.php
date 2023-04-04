<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortofController;

Route::prefix('')->name('port2.')->group(function(){
    Route::get('/',[PortofController::class, 'index'])->name('index');
    Route::get('/about',[PortofController::class, 'about'])->name('about');
    Route::get('/contact',[PortofController::class, 'contact'])->name('contact');
    Route::post('/contact',[PortofController::class, 'contact_data'])->name('contact_data');

});
