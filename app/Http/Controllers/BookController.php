<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Validator;


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

    public function getUpdatePage($id) {
        $book = Book::find($id);

        return view('books.edit', compact('book'));
    }

    public function updateBook($id, Request $request) {
        $book = Book::find($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'release' => 'required|date',
            'cover' => 'nullable|image'
        ]);

        $filename = $book->cover;
        if($request->hasFile('cover')) {
            $file = $request->file('cover');
            $filename = $request->title . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
        }

        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'price' => $request->price,
            'release' => $request->release,
            'cover' => $filename
        ]);

        return redirect(route('home'));
    }

    public function deleteBook($id){
        $book = Book::find($id);
        $book->delete();

        // Book::destroy($id);
        return redirect(route('home'));
    }
}
