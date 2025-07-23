<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Event;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::with('event')->get();
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        $events = Event::all();
        return view('tickets.create', compact('events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ticket_type' => 'required|in:VIP,Regular',
            'price' => 'required|numeric',
            'quantity_available' => 'required|integer',
            'event_id' => 'required|exists:events,id',
        ]);

        Ticket::create($request->all());
        return redirect()->route('tickets.index')->with('success', 'Ticket created successfully.');
    }

    public function edit(Ticket $ticket)
    {
        $events = Event::all();
        return view('tickets.edit', compact('ticket', 'events'));
    }

    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'ticket_type' => 'required|in:VIP,Regular',
            'price' => 'required|numeric',
            'quantity_available' => 'required|integer',
            'event_id' => 'required|exists:events,id',
        ]);

        $ticket->update($request->all());
        return redirect()->route('tickets.index')->with('success', 'Ticket updated successfully.');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index')->with('success', 'Ticket deleted successfully.');
    }
}
