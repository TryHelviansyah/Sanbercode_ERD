@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Genres
                        <a href="{{ route('genre.create') }}" class="btn btn-primary float-end">Add Genre</a>
                    </h4>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($genres as $genre)
                            <tr>
                                <td>{{ $genre->id }}</td>
                                <td>{{ $genre->name }}</td>
                                <td>{{ $genre->description }}</td>
                                <td>
                                    <a href="{{ route('genre.show', $genre->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('genre.edit', $genre->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('genre.destroy', $genre->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this genre?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
