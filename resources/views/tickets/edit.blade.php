@extends('layouts.app')
@section('content')
<h2>Edit Ticket</h2>
<form method="POST" action="{{ route('tickets.update', $ticket) }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Type</label>
        <select id="ticket_type" name="ticket_type" class="form-control">
            <option value="VIP" {{ $ticket->ticket_type == 'VIP' ? 'selected' : '' }}>VIP</option>
            <option value="Regular" {{ $ticket->ticket_type == 'Regular' ? 'selected' : '' }}>Regular</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Price</label>
        <input type="number" name="price" value="{{ $ticket->price }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Quantity</label>
        <input type="number" name="quantity_available" value="{{ $ticket->quantity_available }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Event</label>
        <select name="event_id" class="form-control">
            @foreach($events as $event)
                <option value="{{ $event->id }}" {{ $ticket->event_id == $event->id ? 'selected' : '' }}>{{ $event->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>


<script>
    const ticketTypeSelect = document.getElementById('ticket_type');
    function updateColor() {
        if (ticketTypeSelect.value === 'VIP') {
            ticketTypeSelect.style.backgroundColor = 'gold';
            ticketTypeSelect.style.color = 'black';
        } else {
            ticketTypeSelect.style.backgroundColor = '#007bff';
            ticketTypeSelect.style.color = 'white';
        }
    }

    ticketTypeSelect.addEventListener('change', updateColor);
    updateColor();
</script>
@endsection
