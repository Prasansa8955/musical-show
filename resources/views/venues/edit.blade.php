@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Edit Venue</h2>
        <form action="{{ route('venues.update', $venue->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Venue Name</label>
                <input type="text" name="name" class="form-control" value="{{ $venue->name }}" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" name="location" class="form-control" value="{{ $venue->location }}" required>
            </div>
            <div class="mb-3">
                <label for="capacity" class="form-label">Capacity</label>
                <input type="number" name="capacity" class="form-control" value="{{ $venue->capacity }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
