<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
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
            'title' => 'required|unique:comics|string|max:255',
            'description' => 'required|string',
            'thumb' => 'required|string',
            'price' => 'required|integer',
            'series' => 'required|string',
            'sale_date' => 'required|string',
            'type' => 'required|string',
        ]);

        $data = $request->all();

        $comic_obg = new Comic();
        $comic_obg->title = $data['title'];
        $comic_obg->description = $data['description'];
        $comic_obg->thumb = $data['thumb'];
        $comic_obg->price = $data['price'];
        $comic_obg->series = $data['series'];
        $comic_obg->sale_date = $data['sale_date'];
        $comic_obg->type = $data['type'];
        $comic_obg->save();

        $comic = Comic::orderBy('id', 'desc')->first();

        return redirect()->route('comics.show', compact('comic'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumb' => 'required|string',
            'price' => 'required|integer',
            'series' => 'required|string',
            'sale_date' => 'required|string',
            'type' => 'required|string',
        ]);

        $data = $request->all();
        $comic->update($data);

        return redirect()->route('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
