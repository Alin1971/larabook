@extends('layout')

@section('page-content')

    <p>
        <a href="{{route('books.index')}}">Back</a>
    </p>

    <h1>Book Info</h1>

    <table class="table table-striped">
        <tr>
            <tr>
                  <th>ID</th>
                  <td>{{$book->id}}</td>
            </tr>

            <tr>
                 <th>Title</th>
                 <td>{{$book->title}}</td>
            </tr>

            </tr>
                  <th>Author</th>
                  <td>{{$book->author}}</td>
            </tr>

            <tr>
                 <th>ISBN</th>
                 <td>{{$book->isbn}}</td>
            </tr>

            <tr>
                 <th>Price</th>
                 <td>{{$book->author}}</td>
            </tr>

            <tr>
                 <th>Stock</th>
                 <td>{{$book->stock}}</td>
            </tr>
        </tr>
    </table>

@endsection
