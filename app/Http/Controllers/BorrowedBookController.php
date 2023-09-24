<?php
namespace App\Http\Controllers;
use App\Models\Borrowed_book;
use App\Models\Book;
use App\Models\Student;
class BorrowedBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Illuminate\Http\Response
     */
        public function index() {
            $books =Borrowed_book::all();
            return view("BookBorrowed.index", ["Borrowed_book" => $books]);
        }

}
