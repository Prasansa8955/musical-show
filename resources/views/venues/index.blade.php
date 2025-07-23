@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Manage Venues</h2>
        <a href="{{ route('venues.create') }}" class="btn btn-success mb-3">Add Venue</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Capacity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($venues as $venue)
                    <tr>
                        <td>{{ $venue->name }}</td>
                        <td>{{ $venue->location }}</td>
                        <td>{{ $venue->capacity }}</td>
                        <td>
                            <a href="{{ route('venues.edit', $venue->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('venues.destroy', $venue->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
 <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

