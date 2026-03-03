<?php

namespace App\Http\Controllers;

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

    public function dashboardIndex()
    {
        return inertia('Ancestors/Dashboard/Index', [
            'ancestors' => \App\Models\Ancestor::all()
        ]);
    }

    public function create()
    {
        return inertia('Ancestors/Create');
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
        return inertia('Ancestors/Edit', [
            'ancestor' => $ancestor
        ]);
    }

}
