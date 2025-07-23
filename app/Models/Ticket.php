<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['ticket_type', 'price', 'quantity_available', 'event_id'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
