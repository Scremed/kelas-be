<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function createBook(Request $request) {

        $filename = null;
        if($request->hasFile('cover')) {
            $file = $request->file('cover');
            $filename = $request->title . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
        }

        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'price' => $request->price,
            'release' => $request->release,
            'cover' => $filename
        ]);

        return redirect('/home');
    }

    public function getCreatePage() {
        return view('books.create');
    }

    public function index() {
        $books = Book::all();

        return view('books.home', compact('books'));
    }
}
