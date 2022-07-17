<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PostDec;

class ProjectsController extends Controller
{
    public function index() {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function store() {
        $attributes = request()->validate(['title' => 'required', 'description' => 'required']);
        Project::create($attributes);
        return redirect('/projects');
    }

    public function show($id) {
        $project = Project::findOrFail($id);
        return view('projects.show', compact('project'));
    }
}
