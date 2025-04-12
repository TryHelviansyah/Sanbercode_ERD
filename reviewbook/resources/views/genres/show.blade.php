@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Genre Details
                        <a href="{{ route('genre.index') }}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Name:</strong> {{ $genre->name }}
                    </div>
                    <div class="mb-3">
                        <strong>Description:</strong> {{ $genre->description }}
                    </div>
                    <div class="mb-3">
                        <strong>Created At:</strong> {{ $genre->created_at->format('d/m/Y H:i:s') }}
                    </div>
                    <div class="mb-3">
                        <strong>Updated At:</strong> {{ $genre->updated_at->format('d/m/Y H:i:s') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
