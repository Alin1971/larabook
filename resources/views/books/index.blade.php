@extends('layout')

@section('page-content')

      <div class="row mt-4">
        <div class="col-lg-10">
            search functionality
        </div>

        <div class="col-lg-2">
            <p class="text-end">
                <a href="{{route('books.create')}}" class="btn btn-primary">New Book</a>
            </p>
        </div>
      </div>



    <h1>Book List</h1>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Action</th>

            @foreach ($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->price}}</td>
                <td><a href="{{url('books/'.$book->id.'/show')}}">View</a></td>
            </tr>

            @endforeach

        </tr>
    </table>

    {{$books->links()}}
@endsection
