@extends('layouts.app')
@section('content')
<h2>Add Ticket</h2>
<form method="POST" action="{{ route('tickets.store') }}">
    @csrf
    <div class="mb-3">
        <label>Type</label>
        <select name="ticket_type" class="form-control">
            <option value="VIP">VIP</option>
            <option value="Regular">Regular</option>
        </select>
    </div>
    <div class="mb-3">
        <label>Price</label>
        <input type="number" name="price" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Quantity</label>
        <input type="number" name="quantity_available" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Event</label>
        <select name="event_id" class="form-control">
            @foreach($events as $event)
                <option value="{{ $event->id }}">{{ $event->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
