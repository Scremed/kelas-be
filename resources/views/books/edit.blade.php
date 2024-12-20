edit.blade.php
@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center">
    <form action="{{ route('updatePage', ['id' => $book->id]) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <h1>Edit Book</h1>

        @if ($errors->any())
        <div class="text-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="mb-3">
            <label for="title" class="form-label">Book Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $book->title) }}">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ old('author', $book->author) }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $book->price) }}">
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Book Category</label>
            <select class="form-control" id="category_id" name="category_id">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $book->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="release" class="form-label">Release Date</label>
            <input type="date" class="form-control" id="release" name="release" value="{{ old('release', $book->release) }}">
        </div>
        <div class="mb-3">
            <img src="{{ asset('storage/images/'.$book->cover) }}" class="img-thumbnail" alt="{{ $book->cover }}" style="height: 350px; width: auto;">
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">Book Cover</label>
            <input type="file" class="form-control" id="cover" name="cover">
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('home') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection