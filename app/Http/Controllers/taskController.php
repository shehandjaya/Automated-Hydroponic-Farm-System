<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use App\Models\task;

use Illuminate\Support\Facades\Auth;

class taskController extends Controller
{
    function showTask(){
        $data = task::all()->where('u_id',Auth::user()->id);
        return view('admin.task.taskTbl')->with('data',$data);
    }

    public function addTask(Request $request)
    {
        $task = new task;
        $task->task = $request->input('task');
        $task->u_id = Auth::user()->id;
        $task->save();

        return Response::json(['success' => true, 'message' => 'Task Added successfully']);
    }

    function removeTaskAdmin($id){
        task::destroy($id);
        return response()->json(['message' => 'Task deleted successfully']);
    }

    function madTask($id){
        $data = task::find($id);
        $data->status = 1;
        $data->save();
        return response()->json(['message' => 'Task Status Changed successfully']);
    }
    function mancTask($id){
        $data = task::find($id);
        $data->status = 0;
        $data->save();
        return response()->json(['message' => 'Task Status Changed successfully']);
    }

}
