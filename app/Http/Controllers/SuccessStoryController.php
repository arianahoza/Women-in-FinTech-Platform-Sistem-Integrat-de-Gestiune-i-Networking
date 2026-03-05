<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessStoryController extends Controller
{
    public function index()
    {
        $stories = \App\Models\SuccessStory::all();
    return view('stories.index', compact('stories'));
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $request->validate([
        'title' => 'required',
        'content' => 'required',
        'author_email' => 'required|email'
    ]);

    \App\Models\SuccessStory::create($request->all());
    return back()->with('success', 'Poveste adăugată!');
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
