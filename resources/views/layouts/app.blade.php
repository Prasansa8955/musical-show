<!DOCTYPE html>
<html>
<head>
    <title>Musical Show Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4">Musical Show Management System</h2>
        <nav class="mb-4">
            <a href="{{ route('events.index') }}" class="btn btn-outline-primary btn-sm">Events</a>
            <a href="{{ route('venues.index') }}" class="btn btn-outline-primary btn-sm">Venues</a>
            <a href="{{ route('main-artists.index') }}" class="btn btn-outline-primary btn-sm">Main Artists</a>
            <a href="{{ route('tickets.index') }}" class="btn btn-outline-primary btn-sm">Tickets</a>
        </nav>

        @yield('content')
    </div>
</body>
</html>
