<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
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
            'cover' => $filename,
            'category_id' => $request->category_id
        ]);

        return redirect(route('home'));
    }

    public function getCreatePage() {
        $categories = Category::all();

        return view('books.create', compact('categories'));
    }

    public function index() {
        $books = Book::with('category')->simplePaginate(5);
        $categories = Category::with('books')->get();

        return view('books.home', compact('books', 'categories'));
    }

    public function getUpdatePage($id) {
        $book = Book::find($id);
        $categories = Category::all();

        return view('books.edit', compact('book', 'categories'));
    }

    public function updateBook($id, Request $request) {
        $book = Book::find($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'release' => 'required|date',
            'cover' => 'nullable|image',
            'category_id' => 'required'
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
            'cover' => $filename,
            'category_id' => $request->category_id
        ]);

        return redirect(route('home'));
    }

    public function deleteBook($id){
        $book = Book::find($id);
        $book->delete();

        // Book::destroy($id);
        return redirect(route('home'));
    }

    public function createCategory(Request $request) {
        Category::create([
            'name' => $request->name
        ]);

        return redirect(route('createPage'));
    } 

    public function categoryPage() {
        return view('books.createCategory');
    }
}
