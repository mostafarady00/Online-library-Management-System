<?php
 use App\Http\Controllers\BorrowedBookController;
 use  App\Http\Controllers\UserController;
 use  App\Http\Controllers\BookController;
 use  App\Http\Controllers\StudentController;
// use  App\Http\Controllers\DashboardController;
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

#Route::get('/', function () {
   # return view("frontendprogect.home");
#});
Route::get('/', [UserController::class, 'index']);

#admin
Route::get('/admin', function () {
    return view("user");

})->middleware(['auth'])->name('user');

require __DIR__.'/auth.php';












Route::get('/posts', [UserController::class,'index']);
#admin
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
#book
    Route::get('/books', [BookController::class, 'index'])->name("indexbook");
    Route::get('/books/add', [BookController::class, 'create']);
    Route::get('/books/{id}', [BookController::class, 'show']);
    Route::post('/books', [BookController::class, 'store']);
    Route::get('/books/{id}/edit', [BookController::class, "edit"]);
    Route::put('/books/{id}', [BookController::class, "update"]);
    Route::delete("/books/{id}", [BookController::class, "destroy"]);
#borrowed
    Route::get("/borrowed_books", [BorrowedBookController::class, 'index'])->name("indexborrow");
#student
    Route::get('/students', [StudentController::class, 'index'])->name("indexstudent");
    Route::get('/students/{id}', [StudentController::class, 'show']);
    Route::get('/search', [StudentController::class, 'search']);


