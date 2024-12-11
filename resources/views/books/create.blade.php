@extends('layouts.app')


@section('content')
<div class="col-md-6">
    <form method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Create Book</h1>
        <div class="mb-3">
            <label for="title" class="form-label">Book Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="release" class="form-label">Release Date</label>
            <input type="date" class="form-control" id="release" name="release">
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">Book Cover</label>
            <input type="file" class="form-control" id="cover" name="cover">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection