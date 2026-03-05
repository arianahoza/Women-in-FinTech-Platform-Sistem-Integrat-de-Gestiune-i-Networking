<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
   
    public function index()
    {
        $events = \App\Models\Event::all();
    return view('events.index', compact('events'));
    }

    
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'date' => 'required',
        'location' => 'required'
    ]);

    \App\Models\Event::create($request->all());
    return back()->with('success', 'Eveniment adăugat!');
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
