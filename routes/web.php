<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::controller(KaryawanController::class)->prefix('karyawan')->group(
    function () {
        Route::get('', 'index')->name('karyawan');
        Route::get('insert', 'add')->name('karyawan.insert');
        Route::post('insert', 'insert')->name('karyawan.add.insert');
        Route::get('show/{id}', 'show')->name('karyawan.show');
        Route::get('edit/{id}', 'edit')->name('karyawan.edit');
        Route::put('edit/{id}', 'update')->name('karyawan.update');
        Route::delete('destroy/{id}', 'destroy')->name('karyawan.destroy');
    }
);
