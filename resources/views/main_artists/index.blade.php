@extends('layouts.app')
@section('content')
<h2>Manage Main Artists</h2>
<a href="{{ route('main-artists.create') }}" class="btn btn-success mb-2">Add Artist</a>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Contact Number</th>
        <th>Payment</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
   @foreach ($main_artists as $mainArtist)
    <tr>
        <td>{{ $mainArtist->artist_name }}</td>
        <td>{{ $mainArtist->email }}</td>
        <td>{{ $mainArtist->contact_number }}</td>
        <td>{{ $mainArtist->payment }}</td>
        <td>
            <a href="{{ route('main_artists.edit', $mainArtist->id) }}">Edit</a>
            <form action="{{ route('main_artists.destroy', $mainArtist->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
@endforeach

