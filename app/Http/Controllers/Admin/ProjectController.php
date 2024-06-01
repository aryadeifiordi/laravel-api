<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        if ($projects->isEmpty()) {
            return view('welcome')->with('projects', null);
        }

        return view('welcome')->with('projects', $projects);
    }
}
