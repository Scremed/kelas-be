@extends('layouts.app')

@section('content')

    <h1>Welcome to Bookstore</h1>
    <a href="{{ route("createPage") }}" class="btn btn-primary">Create Book</a>
    <a href="{{ route("createCategory") }}" class="btn btn-primary">Create Category</a>
    
    <div class="row">
        @foreach ($books as $book)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/images/'.$book->cover) }}" class="card-img-top" alt="{{ $book->cover }}">
                <div class="card-body">
                  <h5 class="card-title">Title: {{ $book->title }}</h5>
                  <p class="card-text">Author: {{ $book->author }}</p>
                  <p class="card-text">Price: ${{ $book->price }}</p>
                  <p class="card-text">Category: {{ $book->category->name }}</p>
                  <p class="card-text">Release Date: {{ $book->release }}</p>
                  <a href="{{ route('updatePage', ['id' => $book->id]) }}" class="btn btn-primary">Update</a>
                
                  <form action="{{ route('deleteBook', ['id' => $book->id]) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
