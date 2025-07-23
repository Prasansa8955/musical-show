@extends('layouts.app')

@section('content')
    <a href="{{ route('events.create') }}" class="btn btn-success mb-3">Add Event</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Description</th>
                <th>Venue</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->event_date }}</td>
                    <td>{{ $event->description }}</td>
                    <td>{{ $event->venue->name ?? 'N/A' }}</td>
 <td>
                        <a href="{{ route('events.edit', $event) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('events.destroy', $event) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
