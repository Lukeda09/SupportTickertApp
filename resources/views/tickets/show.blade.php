@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Show ticket</h2>
        <div class="lead">
            
        </div>
        
        <div class="container mt-4">
            <div>
                <b>Title:</b> {{ $ticket->title }}
            </div>
            <div>
                <b>Description:</b> {{ $ticket->description }}
            </div>
            <div>
                <b>Creator:</b> {{ $ticket->creator }}
            </div>
            <div>
                <b>Agent:</b> {{ $ticket->agent }}
            </div>
            <div>
                <b>Status:</b> {{ ucfirst($ticket->status) }}
            </div>
            <div>
                <b>Is Closed:</b> {{ $ticket->is_closed ? 'Yes' : 'No' }}
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('tickets.edit', $ticket->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('tickets.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection