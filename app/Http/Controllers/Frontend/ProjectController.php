<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(6);
        return view('frontend.project', compact('projects'));
    }

    // public function show($slug)
    // {
    //     $project = Project::where('slug', $slug)->firstOrFail();
    //     return view('frontend.project.show', compact('project'));
    // }
}
