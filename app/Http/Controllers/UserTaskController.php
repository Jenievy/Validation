<?php

namespace App\Http\Controllers;

use App\Models\UserTask;
use Illuminate\Http\Request;

class UserTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return UserTask::all();
        //$data['user_tasks'] = UserTask::all();
       //return view('index',['user_tasks' => $user_tasks]);

       $data['user_tasks'] = UserTask::paginate(5);
         return view('index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_tasks');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'task_name' => 'required',
            'status' => 'required',
            'description' => 'required',
            'deadline' => 'required|date',

        ]);
        $usertask = new UserTask();
        $usertask-> task_name    = $request['task_name'];
        $usertask-> status       = $request['status'];
        $usertask-> description  = $request['description'];
        $usertask-> deadline     = $request['deadline'];
        $usertask->save();

        return back()->with('success', 'Data saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserTask $userTask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserTask $userTask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserTask $userTask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserTask $userTask)
    {
        //
    }
}
