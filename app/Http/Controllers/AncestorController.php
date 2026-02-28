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
}
