<?php



use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/events');
});

use App\Http\Controllers\EventController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\MainArtistController;
use App\Http\Controllers\TicketController;

Route::resource('events', EventController::class);
Route::resource('venues', VenueController::class);
Route::resource('main-artists', MainArtistController::class);
Route::resource('tickets', TicketController::class);
