<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;

class GitRepositoryController extends Controller
{
    public function index()
    {
        // Async request to GitHub API
        $repos = Http::async()->withToken(config("services.github.Github_token"))
            ->get('https://api.github.com/users/josepedrolorenzini/repos')
            ->then(function ($response) {
                return $response->json();
            })
            ->wait();

        // Pass the repos to Inertia page
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'repos' => $repos, // <-- this is the key part
        ]);
    }
}
