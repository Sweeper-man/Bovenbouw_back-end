<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Song::all();
        return view("playlist.index", ["songs"=>$songs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("songs.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            "songName" => "required",
            "duration" => "required|int|min:1|max:1080",
            "genre_id" => "required|exists:genres,id"
        ]);

        Song::create([
            "songName" => $request->get("songName"),
            "duration" => $request->get("duration"),
            "genre_id" => $request->get("genre_id")
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        //
    }
}
