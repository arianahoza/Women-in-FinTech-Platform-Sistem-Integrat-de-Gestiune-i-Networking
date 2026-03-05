<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SuccessStoryController;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return redirect()->route('members.index');
});

// Rute Membri
Route::get('members/export', [MemberController::class, 'export'])->name('members.export');
Route::resource('members', MemberController::class);

// Rute Povești de Succes (Bonus)
Route::resource('stories', SuccessStoryController::class);

// Rute Evenimente (Bonus)
Route::resource('events', EventController::class);