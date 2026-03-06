<?php

namespace App\Http\Controllers;

use  \Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AncestorController extends Controller
{
    //
    public function index()
    {
        return inertia('Ancestors/Index', [
            'ancestors' => \App\Models\Ancestor::all()
        ]);
    }

    public function show($id)
    {
        $ancestor = \App\Models\Ancestor::findOrFail($id);
        return inertia('Ancestors/Show', [
            'ancestor' => $ancestor
        ]);
    }

    // Dashboard methods
    public function dashboardIndex()
    {
        return inertia('Dashboard/Ancestors/Index', [
            'ancestors' => \App\Models\Ancestor::all(),
            'user' => auth::user()
        ]);
    }

    public function create()
    {
        return inertia('Dashboard/Ancestors/Create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'relationship' => 'required',
            'birth_date' => 'required|date',
            'birth_place' => 'required',
            'death_date' => 'nullable|date',
            'bio' => 'nullable|string',
        ]);

        \App\Models\Ancestor::create($request->all());

        return redirect()->route('dashboard.ancestors.index');
    }

    public function edit($id)
    {
        $ancestor = \App\Models\Ancestor::findOrFail($id);
        $user = auth::user();
        return inertia('Dashboard/Ancestors/Edit', [
            'ancestor' => $ancestor,
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        dd($request->all());
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'relationship' => 'required',
            'birth_date' => 'nullable|date',
            'birth_place' => 'nullable|string|max:255',
            'death_date' => 'nullable|date',
            'bio' => 'nullable|string',
        ]);
        dd($validated);

        $ancestor = \App\Models\Ancestor::findOrFail($id);
        $ancestor->update($request->all());

        return redirect()->route('dashboard.ancestors.index');
    }
}
