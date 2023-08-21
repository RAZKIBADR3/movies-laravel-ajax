<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'movies';
        $cate = 'all';
        $movies = Movie::all();
        return view('movies.index', compact('title', 'movies', 'cate'));
    }

    public function categoryFilter(Request $request)
    {
        $title = 'movies';
        $cate = $request->category;
        $movies = Category::where('title', $cate)->first()->movies;
        return view('movies.index', compact('title', 'movies', 'cate'));
    }

    public function search(Request $request)
    {
        $title = 'movies';
        $cate = 'all';
        $movies = Movie::where('title', 'like', '%'.$request->title.'%')->get();
        return view('movies.index', compact('title', 'movies', 'cate'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        $title = 'movies';
        return view('movies.show', compact('title', 'movie'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
