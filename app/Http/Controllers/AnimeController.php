<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;


class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animes = Anime::all();
        return view('animes.index', compact('animes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'ratings' => 'required',
            'description' => 'required'

        ]);

        $anime = Anime::create($request->all());

        return redirect()->route('animes.show', $anime->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function show(Anime $anime)
    {
        return view('animes.show', compact('anime'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function edit(Anime $anime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anime $anime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anime  $anime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anime $anime)
    {
        //
    }

    public function anime_character_store(Request $request, Anime $anime){
        $request->validate([
            'character_anime_name' => 'required',
            'character_anime_role' => 'required'
        ]);
        $anime ->characters()-> attach($request -> character_anime_name, ['role' =>$request -> character_anime_role ]);
        return back();
    }

    public function anime_character_destroy(Anime $anime, Character $character){
        $anime -> characters()->detach($character->id);
        return back();
        
    }

}
