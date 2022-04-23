@extends('layouts.app-master')

@section('content')
    
    <h1 class="mb-3">Tickets</h1>

    <div class="bg-light p-4 rounded">
        <h2>Tickets</h2>
        <div class="lead">
            Manage your tickets here.
            <a href="{{ route('tickets.create') }}" class="btn btn-primary btn-sm float-right">Add ticket</a>
        </div>
        
        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">No</th>
             <th>Name</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
            @foreach ($tickets as $key => $ticket)
            <tr>
                <td>{{ $ticket->id }}</td>
                <td>{{ $ticket->title }}</td>
                <td>
                    <a class="btn btn-info btn-sm" href="{{ route('tickets.show', $ticket->id) }}">Show</a>
                </td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('tickets.edit', $ticket->id) }}">Edit</a>
                </td>
                <td>
                    {!! Form::open(['method' => 'DELETE','route' => ['tickets.destroy', $ticket->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $tickets->links() !!}
        </div>

    </div>
@endsection