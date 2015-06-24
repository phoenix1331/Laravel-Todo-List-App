<?php

namespace App\Http\Controllers;
 
use App\Project;
use App\Tasks;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Redirect;
 
use Illuminate\Http\Request;
 
class TasksController extends Controller {
 
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function index(Project $project, Tasks $task)
    {
        return view('tasks.index', compact('project', 'task'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function create(Project $project)
    {
        return view('tasks.create', compact('project'));
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function edit(Project $project, Tasks $task)
    {
        return view('tasks.edit', compact('project', 'task'));
    }

   public function show(Project $project, Tasks $task)
    {
        return view('tasks.show', compact('project', 'task'));
    }
 
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Project $project
     * @return Response
     */
  public function store(Project $project)
{
    $input = Input::all();
    $input['project_id'] = $project->id;
    Tasks::create( $input );
 
    return Redirect::route('projects.show', $project->slug)->with('message', 'Task created.');
}
 
public function update(Project $project, Tasks $task)
{
    $input = array_except(Input::all(), '_method');
    $task->update($input);
 
    return Redirect::route('projects.tasks.show', [$project->slug, $task->slug])->with('message', 'Task updated.');
}
 
public function destroy(Project $project, Tasks $task)
{
    $task->delete();
 
    return Redirect::route('projects.show', $project->slug)->with('message', 'Task deleted.');
}
 
}