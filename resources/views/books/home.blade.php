@extends('layouts.app')

@section('content')
    <h1>Welcome to Bookstore</h1>

    <div class="row">
        @foreach ($books as $book)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/images/'.$book->cover) }}" class="card-img-top" alt="{{ $book->cover }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $book->title }}</h5>
                  <p class="card-text">{{ $book->author }}</p>
                  <p class="card-text">{{ $book->price }}</p>
                  <p class="card-text">{{ $book->release }}</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
