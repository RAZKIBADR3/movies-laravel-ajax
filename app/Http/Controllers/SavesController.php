<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Save;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class SavesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Saved Movies';
        return view('saves.index', compact('title'));
    }

    public function getSaves(){
        $saves = Save::all();
        return view('saves.get', compact('saves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Movie $movie)
    {
        $title = 'Save Movie';
        return view('saves.create', compact('title', 'movie') );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $save = [
            'username' => $request->username,
            'description' => $request->description,
            'id_movie' => $request->id_movie,
        ];
        Save::create($save);

        return redirect('/movies')->with('success', 'movie has saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Save $save)
    {
        $title = 'Edit Saved Movie';
        return view('saves.edit', compact('title', 'save') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $save = Save::find($request->data['id']);
        $save->update($request->data['fields']);

        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $save = Save::find($request->id);
        $save->delete();

        return response()->json(['success' => true]);
        // return redirect('/saves')->with('success', 'saved movie deleted successfully');
    }
}
