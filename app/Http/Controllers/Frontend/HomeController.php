<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $recentProjects = Project::latest()->take(6)->get();
        $latestServices = Service::latest()->take(6)->get();
        
        return view('frontend.index', compact('recentProjects', 'latestServices'));
    }
}
