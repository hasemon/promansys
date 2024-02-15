<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;


class TaskController extends Controller
{
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
    public function add_task($id)
    {
        //
        $project = Project::find($id);
        return view('project.add_task', compact('project', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_task(Request $request, $id)
    {
        //
        try {
            $data_insert = Task::create([
                'project_id' => $id,
                'name' => $request->name,
                'description' => $request->description,
                'due_date' => $request->due_date,
                'status' => $request->status,
            ]);
            return redirect()->route('add.task', $id)->with('success','Project created successfully');
        } catch (\Exception $e) {
            return redirect()->route('add.task', $id)->with('failed','Project creation failed');
        }

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
    public function destroy(string $id)
    {
        //
    }
}
