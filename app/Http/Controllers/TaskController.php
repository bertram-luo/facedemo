<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Repositories\TaskRepository;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
  protected $tasks;

  public function __construct(TaskRepository $tasks){
      $this->middleware('auth');
      parent::__construct();
      $this->tasks = $tasks;
  }
  public function index(Request $request){
    //$tasks = Task::where('user_id', $request->user()->id)->get();
    $tasks = $this->tasks->forUser($request->user());
    return view('tasks.index', ['tasks'=>$tasks,]);
  }
  public function store(Request $request){
      $this->validate($request, ['name' => 'required|max:255',]);
     
      $request->user()->tasks()->create(['name' => $request->name]);
      //return redirect("/tasks");
  }
  public function destroy(Request $request, Task $task){
    $this->authorize('destroy', $task);
    $task->delete();
    redirect("/tasks");
  }
}
