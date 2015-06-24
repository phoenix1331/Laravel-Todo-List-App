<!-- /resources/views/tasks/edit.blade.php -->
@extends('app')
 
@section('content')
    <h2><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>Edit Task "{{ $task->name }}"</h2>
  <div class="form-create">
    {!! Form::model($task, ['method' => 'PATCH', 'route' => ['projects.tasks.update', $project->slug, $task->slug]]) !!}
        @include('tasks/_form', ['submit_text' => 'Edit Task'])
    {!! Form::close() !!}
</div>
    <p class="create">
        {!! link_to_route('projects.show', 'Back to Task List', $project->slug) !!} | {!! link_to_route('projects.index', 'Back to Projects') !!} 
    </p>
@endsection