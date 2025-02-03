@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Purchase List</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Book Title</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($buyers as $buyer)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $buyer->username }}</td>
                            <td>
                                @foreach ($buyer->books as $book)
                                    {{ $book->title }}, 
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection