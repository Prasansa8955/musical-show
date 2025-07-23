@extends('layouts.app')

@section('content')
    <h3>Edit Event</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('events.update', $event) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Event Name</label>
            <input type="text" name="name" value="{{ $event->name }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Event Date</label>
            <input type="date" name="event_date" value="{{ $event->event_date }}" class="form-control" required>
        </div>
<div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" required>{{ $event->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Venue</label>
            <select name="venue_id" class="form-select" required>
                @foreach($venues as $venue)
                    <option value="{{ $venue->id }}" {{ $event->venue_id == $venue->id ? 'selected' : '' }}>{{ $venue->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Event</button>
    </form>
@endsection

