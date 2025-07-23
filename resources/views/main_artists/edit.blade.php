@extends('layouts.app')
@section('content')
<h2>Edit Artist</h2>
<form method="POST" action="{{ route('main-artists.update', $main_artist) }}">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="artist_name" value="{{ $main_artist->artist_name }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="{{ $main_artist->email }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Contact Number</label>
        <input type="text" name="contact_number" value="{{ $main_artist->contact_number }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Payment</label>
        <input type="number" name="payment" value="{{ $main_artist->payment }}" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
