<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
   public function index(Request $request)
{
    $query = Member::query();

    if ($request->filled('search')) {
        $search = $request->search;
        $query->where(function($q) use ($search) {
            $q->where('name', 'like', '%' . $search . '%')
              ->orWhere('email', 'like', '%' . $search . '%');
        });
    }

    if ($request->filled('profession')) {
        $query->where('profession', 'like', '%' . $request->profession . '%');
    }

    if ($request->filled('company')) { 
        $query->where('company', 'like', '%' . $request->company . '%');
    }

    if ($request->filled('status')) { 
        $query->where('status', $request->status);
    }

    $members = $query->paginate(10); 
    return view('members.index', compact('members'));
}

    public function create()
    {
        return view('members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:members',
            'profession' => 'required',
            'company' => 'nullable',
            'linkedin_url' => 'nullable|url',
            'status' => 'required'
        ]);

        Member::create($request->all());

        return redirect()->route('members.index')->with('success', 'Membru adăugat cu succes!');
    }

    public function edit(string $id)
    {
        $member = Member::findOrFail($id);
        return view('members.edit', compact('member'));
    }

   public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:members,email,' . $id,
        'profession' => 'required',
        'company' => 'nullable',
        'linkedin_url' => 'nullable|url',
        'status' => 'required'
    ]);

    $member = Member::findOrFail($id);
    $member->update($request->all());

    return redirect()->route('members.index')->with('success', 'Membru actualizat cu succes!');
}

    public function destroy(string $id)
    {
        $member = Member::findOrFail($id); 
        $member->delete();
        return redirect()->route('members.index')->with('success', 'Member deleted successfully!');
    }

   public function export()
{
    $members = Member::all();
    $csvData = "Nume,Email,Profesie,Companie,Status\n";

    foreach ($members as $member) {
        $csvData .= "{$member->name},{$member->email},{$member->profession},{$member->company},{$member->status}\n";
    }

    return response($csvData)
        ->header('Content-Type', 'text/csv')
        ->header('Content-Disposition', 'attachment; filename="membri.csv"');
}
    public function show($id)
{
    return redirect()->route('members.index');
}
}