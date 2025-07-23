<?php

namespace App\Http\Controllers;

use App\Models\MainArtist;
use Illuminate\Http\Request;

class MainArtistController extends Controller
{
   public function index()
{
    $main_artists = MainArtist::all();
    return view('main_artists.index', compact('main_artists'));
}
    public function create()
    {
        return view('main_artists.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'artist_name' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required',
            'payment' => 'required|numeric',
        ]);

        MainArtist::create($request->all());
        return redirect()->route('main-artists.index')->with('success', 'Main Artist created successfully.');
    }

    public function edit($id)
{
    $mainArtist = MainArtist::findOrFail($id);
    return view('main_artists.edit', compact('mainArtist'));
}
    public function update(Request $request, MainArtist $main_artist)
    {
        $request->validate([
            'artist_name' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required',
            'payment' => 'required|numeric',
        ]);

        $main_artist->update($request->all());
        return redirect()->route('main-artists.index')->with('success', 'Main Artist updated successfully.');
    }

    public function destroy(MainArtist $main_artist)
    {
        $main_artist->delete();
        return redirect()->route('main-artists.index')->with('success', 'Main Artist deleted successfully.');
    }
}
