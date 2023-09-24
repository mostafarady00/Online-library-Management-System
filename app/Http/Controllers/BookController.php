<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\CreateBookRequest;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller {

    public function index() {
        $books = Book::all();
        return view("book.list",compact("books"));
    }

    public function create() {
        return view("book.add");
    }

    public function show(string $id) {
        $book = Book::find($id);
        return view('book.view', compact("book"));
    }



    public function store(Request $request) {
        $book = new Book;
        $book->name = $request->name;
        $book->category = $request->category;
        $book->auther = $request->auther;
        $book->status = $request->status;
        $book->img = $request->img;
        $book->save();
         return redirect("/books");

    }

    function edit($id) {
        $book=Book::find($id);
        return view("book.edit", compact("book"));
        }


        function update(Request $request,string $id){
         $book=Book::find($id);
         $book->name = $request->name;
         $book->category= $request->category;
         $book->auther = $request->auther;
         $book->status =$request->status;
         $book->img = $request->img;
         $book->save();
         return redirect("/books");
        }


        function destroy($id) {
            Book ::destroy($id);
            return redirect("/books");
        }

}
?>

