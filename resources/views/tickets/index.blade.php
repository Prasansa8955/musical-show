@extends('layouts.app')
@section('content')
<h2>Manage Tickets</h2>
<a href="{{ route('tickets.create') }}" class="btn btn-success mb-2">Add Ticket</a>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Type</th>
        <th>Price</th>
        <th>Quantity Available</th>
        <th>Event</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tickets as $ticket)
        <tr>
            <td>{{ $ticket->ticket_type }}</td>
            <td>{{ $ticket->price }}</td>
            <td>{{ $ticket->quantity_available }}</td>
            <td>{{ $ticket->event->name ?? 'N/A' }}</td>
            <td>
                <a href="{{ route('tickets.edit', $ticket) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('tickets.destroy', $ticket) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
</form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
