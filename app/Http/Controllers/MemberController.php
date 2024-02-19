<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Project;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function list_members($id)
    {
        $project = Project::find($id);
        $members = Member::all();
        return view('members.list_members', compact('project', 'members'));
    }

    public function store_member(Request $request, $id)
    {
        try {
            $data_insert = Member::create([
                'name' => $request->name,
                'details' => $request->details,
                'status' => $request->status,
                'project_id' => $id
            ]);
            return redirect()->route('list.members', ['id' => $id])->with('success', 'Member created successfully');
        } catch (\Exception $e) {
            return redirect()->route('list.members', ['id' => $id])->with('failed', 'Member creation failed');
        }
    }

}
