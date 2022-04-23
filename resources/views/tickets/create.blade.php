@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Add new ticket</h2>
        <div class="lead">
            Add new ticket.
        </div>

        <div class="container mt-4">

            <form method="POST" action="{{ route('tickets.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input value="{{ old('title') }}" 
                        type="text" 
                        class="form-control" 
                        name="title" 
                        placeholder="Title" required>

                    @if ($errors->has('title'))
                        <span class="text-danger text-left">{{ $errors->first('title') }}</span>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" 
                        name="description" 
                        placeholder="Description" required>{{ old('description') }}</textarea>


                    @if ($errors->has('description'))
                        <span class="text-danger text-left">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                

                <button type="submit" class="btn btn-primary">Save ticket</button>
                <a href="{{ route('tickets.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection