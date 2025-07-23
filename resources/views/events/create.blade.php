@extends('layouts.app')

@section('content')
    <h3>Add New Event</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Event Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Event Date</label>
            <input type="date" name="event_date" class="form-control" required>
        </div>
<div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label>Venue</label>
            <select name="venue_id" class="form-select" required>
                <option value="">-- Select Venue --</option>
                @foreach($venues as $venue)
                    <option value="{{ $venue->id }}">{{ $venue->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Event</button>
    </form>
@endsection

