<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function addtask($id = null)
    {
        $task = Task::where('id', $id)->firstOrNew([]);
        $task->task = request('task');
        $task->save();
        $mes = $id ? 'Task updated' : 'Task added';
        return redirect()->back()->with('success', $mes);
    }

    public function deleteTask($id)
    {
        Task::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Task deleted');
    }

    public function updateTask(Request $request)
    {
        Task::where('id', request('taskId'))->update(['completed' => request('completed')]);
        return json_encode('Task status updated');
    }
}
