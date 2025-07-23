@extends('layouts.app')
@section('content')
<h2>Add Artist</h2>
<form method="POST" action="{{ route('main-artists.store') }}">
    @csrf
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="artist_name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Contact Number</label>
        <input type="text" name="contact_number" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Payment</label>
        <input type="number" name="payment" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

