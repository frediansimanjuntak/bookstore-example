@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Book List</h2>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Book List</div>
                <div class="card-body">
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="{{ route('books.create') }}"> Create New Book</a>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Year</th>
                            <th>Author</th>
                            <th>Publisher</th>
                            <th width="280px">Action</th>
                        </tr>
                        @foreach ($books as $book)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $book->name }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>
                                <form action="{{ route('books.destroy',$book->id) }}" method="POST">

                                    <a class="btn btn-success" href="{{ route('books.show',$book->id) }}">Show</a>

                                    <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{-- pagination --}}
                    {!! $books->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
