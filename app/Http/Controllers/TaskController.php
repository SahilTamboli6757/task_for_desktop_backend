<?php

namespace App\Http\Controllers;

use App\Http\Requests\Task\CreateTaskRequest;
use App\Http\Requests\Task\UpdateTaskReque;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Log::info("user id". Auth::user()->id ."");
        $tasks =  Task::where('user_id', Auth::user()->id)->orderByDesc('updated_at')->with('user')->get();

        return response()->json(["tasks" => $tasks], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateTaskRequest $request)
    {
        $params = $request->validated();

        if(Auth::user()){
            $params["user_id"] = Auth::user()->id;
        }
        else{
            $params["user_id"] = 1;
        }

        $task = Task::create($params);

        return response()->json(["task" => $task], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::find($id);

        return response()->json(["task" => $task], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskReque $request, string $id)
    {
        $task = Task::find($id);

        $task->update($request->validated());

        return response()->json(["task" => $task], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::find($id);

        $task->delete();

        return response()->json(["message" => "Task deleted successfully"], 200);
    }
}
