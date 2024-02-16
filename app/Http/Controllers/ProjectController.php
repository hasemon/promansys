<?php

namespace App\Http\Controllers;


use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function new_project()
    {
        //
        return view('project.new_project');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_project(Request $request)
    {
        //
        try {
            $data_insert = Project::create([
                'name' => $request->name,
                'description' => $request->description,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'status' => $request->status,
            ]);
            return redirect()->route('new.project')->with('success', 'Project created successfully');
        } catch (\Exception $e) {
            return redirect()->route('new.project')->with('failed', 'Project creation failed');
        }
    }

    public function list_project()
    {
        //
        $projects = Project::all();
        return view('project.list_project', compact('projects'));
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
    public function delete_project(string $id)
    {
        //destroy id
        $project = Project::find($id);
        $project->delete();
        return redirect()->route('list.project')->with('success', 'Project deleted successfully');
    }
}
