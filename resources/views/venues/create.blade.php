@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Add Venue</h2>
        <form action="{{ route('venues.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Venue Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" name="location" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="capacity" class="form-label">Capacity</label>
                <input type="number" name="capacity" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection
