<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
//Not In Use
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

//Zura added in - need to be authenticated and verified in order to acces the notes link
Route::redirect('/','/note')->name('dashboard'); // double redirect: dashboard -> / -> /note
Route::middleware(['auth', 'verified'])->group(function () {
    //Note Controller - Long way
    /*
    Route::get("/note",[NoteController::class,'index'])->name('note.index');
    Route::get("/note/create",[NoteController::class,'create'])->name('note.create');
    Route::post("/note/store",[NoteController::class,'store'])->name('note.store');
    Route::get("/note/{id}",[NoteController::class,'show'])->name("note.show");
    Route::put("/note/{id}/edit",[NoteController::class,'edit'])->name("note.edit");
    Route::delete("/note/{id}",[NoteController::class,'destroy'])->name("note.destroy");
    */
    // Note Controller - One Liner
    Route::resource('note', NoteController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
