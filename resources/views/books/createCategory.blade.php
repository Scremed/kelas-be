@extends('layouts.app')


@section('content')

<div class="d-flex justify-content-center">
    <form action="{{ route('createCategory') }}" method="POST">
        @csrf
        <h1>Create Categories</h1>
        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection